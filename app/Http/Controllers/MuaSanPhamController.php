<?php

namespace App\Http\Controllers;

use App\Models\MuaSanPham;
use App\Models\SanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Facade;
use Illuminate\Support\Facades\Validator;

class MuaSanPhamController extends Controller
{
    public function index()
    {
        $data = MuaSanPham::orderBy("id", "desc")->paginate(20);
        return view("clients.muasanpham.index")->with("data", $data);
    }
    //chitietdon
    public function chitietdon($id)
    {
        $data = MuaSanPham::findOrFail($id);
        $datagt = MuaSanPham::select(MuaSanPham::raw('SUM(so_luong*gia) as gia'))->where("id", $id)->get();
        return view(".chitietdon")
            ->with("data", $data)->with("datagt", $datagt);
    }

    public function create($id)
    {
        $data = SanPham::findOrFail($id);
        return view("clients.muasanpham.create")
            ->with("data", $data);
    }

    public function edit($id)
    {
        $data = MuaSanPham::findOrFail($id);
        return view("clients.muasanpham.edit")->with("data", $data);
    }

    public function upsert(Request $request, $id = null)
    {
        $data = $request->all();
        unset($data["_token"]);

        $this->customValidate($request);
        if ($id == null) {
            $msg = "Thêm thành công";
        } else {
            $msg = "Cập nhật thành công!!! verrry goood!";
        }
        //update hoặc insert
        MuaSanPham::updateOrCreate(["id" => $id], $data);
        return redirect()->route('clients.muasanpham.index')->with("success_msg", "THÀNH CÔNG!!!");
    }
    public function destroy($id)
    {
        $dm = MuaSanPham::findOrFail($id);
        $ten_san_pham = $dm->ten_san_pham;
        MuaSanPham::destroy($id);
        return redirect()->route('clients.muasanpham.index')->with("success_msg", "XÓA THÀNH CÔNG!!!");
    }
    private function customValidate(Request $request)
    {
        $rules = [
            "so_dt" => "required|min:9|max:10",
            "so_luong" => "required|min:1",
        ];
        $request->validate($rules);
    }
}
