<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{

    //hiển thị
    public function index()
    {
        $data = User::orderBy("id", "desc")->paginate(20);
        return view("admin.admin.index")->with("data", $data);
    }

    public function create()
    {
        return view("admin.admin.create");
    }

    //sửa admin
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view("admin.admin.edit")->with("data", $data);
    }

    public function destroy($id)
    {
        $dm = User::findOrFail($id);
        $name = $dm->name;
        $avatar = $dm->avatar;
        User::destroy($id);
        return redirect()->back()->with("success_msg", "XÓA '$name' THÀNH CÔNG!!!");
    }

    //
    public function upsert(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data["_token"]);
        unset($data["cf_password"]);

        if ($id == null) {
            $filename = "";
            $file = $request->file("avatar");
            if (!empty($file)) { //tạo tên file ngẫu nhiên để tránh trùng tên gây lỗi
                $filename = $file->hashName();
                //luu ở thư mục public với tên mới tạo
                $file->storeAs("/files", $filename);
                $filename = "/files/" . $filename;
            }
            $data["avatar"] = $filename;

            $msg = "Thêm thành công";
        } else {
            $file = $request->file("avatar");
            if (!empty($file)) { //tạo tên file ngẫu nhiên để tránh trùng tên gây lỗi
                $filename = $file->hashName();
                //luu ở thư mục public với tên mới tạo
                $file->storeAs("/files", $filename);
                $filename = "/files/" . $filename;
            }
            $data["avatar"] = $filename;
            $msg = "Cập nhật thành công!!! verrry goood!";
        }

        //hash mật khẩu
        $data["password"] = Hash::make($data["password"]);

        //update hoặc insert
        User::updateOrCreate(["id" => $id], $data);
        return redirect("admin.admin.index")->with("success_msg", $msg);
    }
    public function save(Request $request)
    {
        $this->customValidate($request);
        //validate dữ liệu
        # tất cả dữ lieu là bắt buộc
        # Họ và tên và mật khẩu ko ít hơn 4 kí tự
        # mk và mã xác nhận phải giống nhau; email là duy nhất ko tần tại 2 mail giống nhau trong databasse
        $data = $request->all();
        unset($data["_token"]);
        unset($data["cf_password"]);
        //hash mật khẩu
        $data["password"] = Hash::make($data["password"]);
        $user = new User($data);
        $user->save();
        return redirect()->route("account.login")->with("success_msg", "Đăng ký thành công!! Vui lòng đăng nhập.");
    }
    private function customValidate(Request $request)
    {
        $rules = [
            "name" => ["required", "min:4"], //not null min 3 k tự max 100 kí tự
            "password" => ["required", "min:4", "same:cf_password"],
            "cf_password" => ["required"],
            "email" => ["required", "unique:users,email"], //unique
        ];
        $request->validate($rules);
    }
}
