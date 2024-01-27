<?php

namespace App\Http\Controllers;

use App\Models\BangGia;
use App\Models\CauHinh;
use Illuminate\Http\Request;
use App\Models\SanPham;
use App\Models\DanhMuc;
use App\Models\DongGop;
use App\Models\Help;
use App\Models\MuaSanPham;
use App\Models\TinTuc;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Pagination\Paginator;

Paginator::useBootstrap();

class Homecontroller extends Controller
{
    public function index(Request $request)
    {
        $datab = SanPham::orderBy("id", "desc")->paginate(3); //banner
        $data = SanPham::orderBy("id", "desc")->paginate(42); //sanpham
        $data1 = DanhMuc::orderBy("id", "desc")->get(); //danh muc
        $data2 = TinTuc::orderBy("id", "desc")->paginate(6); //tin tuc
        $datach = CauHinh::orderBy("id", "desc")->paginate(1); //cấu hình
        //tìm kiếm
        $tukhoa = ($request->has('tukhoa')) ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));
        if ($tukhoa != "") {
            $data = SanPham::where("ten_san_pham", "like", "%$tukhoa%")->paginate(42);
        }
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

    public function chitiet(Request $request, $id)
    {
        $datasp = SanPham::orderBy("id", "asc")->paginate(6);
        $data = SanPham::findOrFail($id);
        $data1 = DongGop::where("id_san_phams", $id)
            ->orderBy("id", "desc")
            ->paginate(30); //donggop
        $tukhoa = ($request->has('tukhoa')) ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));
        if ($tukhoa != "") {
            $datasp = SanPham::where("ten_san_pham", "like", "%$tukhoa%")->paginate(42);
        }
        return view(".chitiet")
            ->with("datasp", $datasp)
            ->with("data", $data)
            ->with("data1", $data1)
            ->with("tukhoa,datasp", $tukhoa, $datasp);
    }
    //danh mục san pham
    public function dm_sp($id_danh_muc)
    {
        $data = SanPham::where("id_danh_muc", $id_danh_muc)
            ->orderBy("id", "desc")
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
    //bảng giá
    public function banggia(Request $request)
    {
        $data = BangGia::orderBy("id", "desc")->paginate(50);
        $tukhoa = ($request->has('tukhoa')) ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));
        if ($tukhoa != "") {
            $data = BangGia::where("doi_tuong", "like", "%$tukhoa%")->paginate(42);
        }
        return view(".banggia")
            ->with("data", $data)
            ->with("tukhoa,data", $tukhoa, $data);
    }
    //index_admin
    public function indexAdmin()
    {
        $data = MuaSanPham::orderBy("id", "desc")->paginate(30);
        $datac = MuaSanPham::select('so_luong')->sum('so_luong');
        $datagt = MuaSanPham::select(MuaSanPham::raw('SUM(so_luong*gia) as gia'))->get();
        return view(".index_Admin")
            ->with("data", $data)
            ->with("datagt", $datagt)
            ->with("datac", $datac);
    }
    //help
    public function help(Request $request)
    {
        $data = Help::orderBy("id", "desc")->paginate(30);
        $datach = CauHinh::orderBy("id", "desc")->paginate(1);
        $tukhoa = ($request->has('tukhoa')) ? $request->query('tukhoa') : "";
        $tukhoa = trim(strip_tags($tukhoa));
        if ($tukhoa != "") {
            $data = Help::where("cau_hoi", "like", "%$tukhoa%")->paginate(42);
        }
        return view("help")
            ->with("data", $data)
            ->with("datach", $datach)
            ->with("tukhoa,data", $tukhoa, $data);
    }
}
