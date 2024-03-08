<?php

namespace App\Http\Controllers;

use App\Models\CauHinh;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    //dăng kí tài khoảng
    public function register()
    {
        $data = CauHinh::orderBy("id", "desc")->paginate(1);
        return view("account/register")->with("data", $data);
    }

    //sửa
    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view("clients.account.edit")->with("data", $data);
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
        $data["cf_password"] = Hash::make($data["cf_password"]);

        //update hoặc insert
        User::updateOrCreate(["id" => $id], $data);
        return redirect("/")->with("success_msg", $msg);
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
    //đăng nhập
    public function login()
    {
        return view("account/login");
    }

    public function auth(Request $request)
    {
        $data = $request->all();
        unset($data["_token"]);

        if (Auth::attempt($data)) {
            //đăng nhập thành công
            return redirect()->to("/")->with("success_msg", "Đăng nhập thành công");
        } else {
            //đăng nhập thất bại
            return redirect()->route("account.login")->with("error_msg", "Tài khoản và mật khẩu không chính xác");
        }


        // if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 1])) {
        //     //đăng nhập thành công
        //     return redirect()->to("/")->with("success_msg", "Đăng nhập thành công");
        // } else if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'role' => 2])) {
        //     return view("index_Admin")->with("success_msg", "Admin");
        // } else {
        //     //đăng nhập thất bại
        //     return redirect()->route("account.login")->with("error_msg", "Tài khoản và mật khẩu không chính xác");
        // }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->to("/");
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
