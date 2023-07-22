<?php

namespace App\Http\Controllers;

use App\Models\CauHinh;
use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\DanhMuc;
use App\Models\DongGop;
use App\Models\MuaSanPham;
use App\Models\TinTuc;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Pagination\Paginator;

Paginator::useBootstrap();

class Homecontroller extends Controller
{
    public function index(Request $request)
    {
        $datab = SanPham::skip(2)->take(3)->orderBy("id", "desc")->get(); //banner
        $data = SanPham::orderBy("id", "desc")->paginate(42); //sanpham
        $data1 = DanhMuc::orderBy("id", "desc")->paginate(3); //danh muc
        $data2 = TinTuc::orderBy("id", "desc")->paginate(6); //tin tuc
        //tìm kiếm
        $tukhoa = ($request->has('tukhoa')) ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));
        // $data = [];
        if ($tukhoa != "") {
            $data = SanPham::where("ten_san_pham", "like", "%$tukhoa%")->paginate(42);
        }
        //logo
        $datach = CauHinh::orderBy("id", "desc")->paginate(1); //sanpham

        return view("welcome")
            ->with("datab", $datab)
            ->with("data", $data)
            ->with("data1", $data1)
            ->with("data2", $data2)
            ->with("tukhoa,data", $tukhoa, $data)
            ->with("datach", $datach);
    }
    // sản phẩm
    public function indexSanPham(Request $request)
    {
        $data = SanPham::orderBy("id", "desc")->paginate(48);
        //tìm kiếm
        $tukhoa = ($request->has('tukhoa')) ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));
        if ($tukhoa != "") {
            $data = SanPham::where("ten_san_pham", "like", "%$tukhoa%")->paginate(42);
        }

        return view(".sanpham")
            ->with("data", $data)
            ->with("tukhoa,data", $tukhoa, $data);
    }

    public function chitiet($id)
    {
        $data = SanPham::findOrFail($id);
        $data1 = DongGop::where("id_san_phams", $id)
            ->orderBy("id_san_phams", "desc")
            ->paginate(30); //donggop
        return view(".chitiet")
            ->with("data", $data)
            ->with("data1", $data1);
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
    public function indexTinTuc(Request $request)
    {
        $data = TinTuc::orderBy("id", "desc")->paginate(30);
        $tukhoa = ($request->has('tukhoa')) ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));
        if ($tukhoa != "") {
            $data = TinTuc::where("ten_tin_tuc", "like", "%$tukhoa%")->paginate(42);
        }
        return view(".tintuc")
            ->with("data", $data)
            ->with("tukhoa,data", $tukhoa, $data);
    }
    public function chitiettin($id)
    {
        $data = TinTuc::findOrFail($id);
        return view(".chitiettin")->with("data", $data);
    }
    //index_admin
    public function indexAdmin()
    {
        $data = MuaSanPham::orderBy("id", "desc")->paginate(30);
        $dem = MuaSanPham::select('so_luong')->get();
        $datac = $dem->count();
        return view(".index_Admin")
            ->with("data", $data)
            ->with("datac", $datac);
    }
}
