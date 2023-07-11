<?php

namespace App\Http\Controllers;

use App\Models\MuaSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Validator;

class MuaSanPhamController extends Controller
{
    public function index()
    {
        $data = MuaSanPham::orderBy("id", "asc")->paginate(10);
        return view("admin.muasanpham.index")->with("data", $data);
    }

    public function create()
    {
        return view("admin.muasanpham.create");
        // $data = MuaSanPham::findOrFail($id);
        // return view("admin.muasanpham.create")->with("data", $data);
    }

    public function edit($id)
    {
        $data = MuaSanPham::findOrFail($id);
        return view("admin.muasanpham.edit")->with("data", $data);
    }

    public function upsert(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data["_token"]);

        //ràng buộc dữ liệu tối thiểu và tối da
        $this->customValidate($request);

        if ($id == null) {
            $msg = "Thêm thành công";
        } else {

            $msg = "Cập nhật thành công!!! verrry goood!";
        }
        //update hoặc insert
        MuaSanPham::updateOrCreate(["id" => $id], $data);
        return redirect()->route('admin.muasanpham.index')->with("success_msg", $msg);
    }
    public function destroy($id)
    {
        $dm = MuaSanPham::findOrFail($id);
        $ten_san_pham = $dm->ten_san_pham;
        MuaSanPham::destroy($id);
        return redirect()->back()->with("success_msg", "XÓA THÀNH CÔNG!!!");
    }
    private function customValidate(Request $request)
    {
        $rules = [
            "name" => "required|min:3|max:100" //not null min 3 k tự max 100 kí tự
        ];
        $request->validate($rules);
    }
}
