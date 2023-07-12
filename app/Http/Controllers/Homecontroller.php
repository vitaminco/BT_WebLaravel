<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\DanhMuc;
use App\Models\TinTuc;

class Homecontroller extends Controller
{
    public function index()
    {
        $datab = SanPham::orderBy("id", "desc")->paginate(2); //banner
        $data = SanPham::orderBy("id", "desc")->paginate(200); //sanpham
        $data1 = DanhMuc::orderBy("id", "asc")->paginate(3); //danh muc
        $data2 = TinTuc::orderBy("id", "desc")->paginate(6); //tin tuc
        return view("welcome")
            ->with("datab", $datab)
            ->with("data", $data)
            ->with("data1", $data1)
            ->with("data2", $data2);
    }
    // sản phẩm
    public function indexSanPham()
    {
        $data = SanPham::orderBy("id", "asc")->paginate(30);
        return view(".sanpham")->with("data", $data);
    }

    public function chitiet($id)
    {
        $data = SanPham::findOrFail($id);
        return view(".chitiet")->with("data", $data);
    }
    // tin tức
    public function indexTinTuc()
    {
        $data = TinTuc::orderBy("id", "asc")->paginate(30);
        return view(".tintuc")->with("data", $data);
    }
    public function chitiettin($id)
    {
        $data = TinTuc::findOrFail($id);
        return view(".chitiettin")->with("data", $data);
    }
}
