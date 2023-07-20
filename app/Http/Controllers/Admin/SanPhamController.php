<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Validator;


class SanPhamController extends Controller
{

    public function index()
    {
        $data = SanPham::orderBy("id", "desc")->paginate(50);
        return view("admin.sanpham.index")->with("data", $data);
    }


    public function create()
    {
        return view("admin.sanpham.create");
    }


    public function edit($id)
    {
        $data = SanPham::findOrFail($id);
        return view("admin.sanpham.edit")->with("data", $data);
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
        SanPham::updateOrCreate(["id" => $id], $data);
        return redirect()->route('admin.sanpham.index')->with("success_msg", $msg);
    }

    public function destroy($id)
    {
        $dm = SanPham::findOrFail($id);
        $ten_san_pham = $dm->ten_san_pham;
        $anh_cover = $dm->anh_cover;
        SanPham::destroy($id);
        return redirect()->back()->with("success_msg", "XÓA '$ten_san_pham' THÀNH CÔNG!!!");
    }

    private function customValidate(Request $request)
    {
        $rules = [
            "ten_san_pham" => "required|min:3|max:100" //not null min 3 k tự max 100 kí tự
        ];
        $request->validate($rules);
    }
}
