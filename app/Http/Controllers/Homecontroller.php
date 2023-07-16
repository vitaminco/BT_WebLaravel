<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\DanhMuc;
use App\Models\TinTuc;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Query\Builder;

class Homecontroller extends Controller
{
    public function index()
    {
        $datab = SanPham::skip(2)->take(3)->get(); //banner
        $data = SanPham::orderBy("id", "desc")->paginate(42); //sanpham
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
        return view(".chitiet")
            ->with("data", $data);
    }
    //danh mục san pham
    public function dm_sp($id_danh_muc)
    {
        $data = SanPham::where("id_danh_muc", $id_danh_muc)
            ->orderBy("id", "asc")
            ->paginate(50);
        return view(".sanpham")
            ->with("data", $data);
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
    //index_admin
    public function indexAdmin()
    {
        return view(".index_Admin");
    }
}
