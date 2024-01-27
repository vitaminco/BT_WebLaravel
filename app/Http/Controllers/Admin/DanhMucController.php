<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Validator;

class DanhMucController extends Controller
{

    public function index()
    {
        //cách 1: $data = DanhMuc::orderBy("id", "desc")->get();
        //cách 2: $data= DanhMuc::all();
        //cách 3: paginate có thê phân trangs số dòng 1 trang
        $data = DanhMuc::orderBy("id", "desc")->paginate(20);
        //cash 1:
        return view("admin.category.index")->with("data", $data);
        //cashc 2: return view("admin.danhmuc.index" compact("data"));
    }

    public function create()
    {
        return view("admin.category.create");
    }

    public function edit($id)
    {
        $data = DanhMuc::findOrFail($id);
        return view("admin.category.edit")->with("data", $data);
    }


    public function upsert(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data["_token"]);

        //ràng buộc dữ liệu tối thiểu và tối da
        $this->customValidate($request);

        if ($id == null) {
            $filename = "";
            $file = $request->file("anh_cover");
            if (!empty($file)) { //tạo tên file ngẫu nhiên để tránh trùng tên gây lỗi
                $filename = $file->hashName();
                //luu ở thư mục public với tên mới tạo
                $file->storeAs("/files", $filename);
                $filename = "/files/" . $filename;
            }
            $data["anh_cover"] = $filename;

            $msg = "Thêm thành công";
        } else {
            $file = $request->file("anh_cover");
            if (!empty($file)) { //tạo tên file ngẫu nhiên để tránh trùng tên gây lỗi
                $filename = $file->hashName();
                //luu ở thư mục public với tên mới tạo
                $file->storeAs("/files", $filename);
                $filename = "/files/" . $filename;
            }
            $data["anh_cover"] = $filename;
            $msg = "Cập nhật thành công!!! verrry goood!";
        }
        //update hoặc insert
        DanhMuc::updateOrCreate(["id" => $id], $data);
        return redirect()->route('admin.category.index')->with("success_msg", $msg);
    }

    public function destroy($id)
    {
        $dm = DanhMuc::findOrFail($id);
        $ten_danh_muc = $dm->ten_danh_muc;
        $anh_cover = $dm->anh_cover;
        DanhMuc::destroy($id);
        return redirect()->back()->with("success_msg", "XÓA '$ten_danh_muc' THÀNH CÔNG!!!");
    }

    private function customValidate(Request $request)
    {
        $rules = [
            "ten_danh_muc" => "required|min:3|max:100" //not null min 3 k tự max 100 kí tự
        ];
        $request->validate($rules);
    }
}
