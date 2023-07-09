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
        $data = SanPham::orderBy("id", "asc")->paginate(9);
        return view("welcome")->with("data", $data);
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
}
