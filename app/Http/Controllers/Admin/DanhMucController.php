<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\DanhMuc;
use App\Models\SanPham;
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
        $data = DanhMuc::orderBy("id", "asc")->paginate(9);
        //cash 1:
        return view("admin.danhmuc.index")->with("data", $data);
        //cashc 2: return view("admin.danhmuc.index" compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.danhmuc.create");
    }

    public function edit($id)
    {
        $data = SanPham::findOrFail($id);
        return view("admin.danhmuc.edit")->with("data", $data);
    }


    public function upsert(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data["_token"]);

        //ràng buộc dữ liệu tối thiểu và tối da
        $this->customValidate($request);
        //update hoặc insert
        DanhMuc::updateOrCreate(["id" => $id], $data);
        if ($id == null) {
            $msg = "Thêm danh mục thành công";
        } else {
            $msg = "Cập nhật thành công!!! verrry goood!";
        }
        return redirect()->route('admin.danhmuc.index')->with("success_msg", $msg);
    }

    public function destroy($id)
    {
        $dm = DanhMuc::findOrFail($id);
        $ten_danh_muc = $dm->ten_danh_muc;
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
