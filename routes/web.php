<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\DanhMucController;
use App\Http\Controllers\Admin\SanPhamController;
use App\Http\Controllers\Admin\TinTucController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\MuaSanPhamController;
use App\Models\SanPham;
use App\Models\DanhMuc;
use App\Models\MuaSanPham;

Route::get('/', [Homecontroller::class, "index"])->name("home");
Route::get('indexSanPham', [Homecontroller::class, "indexSanPham"])->name("sanpham");
Route::get('indexTinTuc', [Homecontroller::class, "indexTinTuc"])->name("tintuc");
Route::get('/{id}/chitiet', [Homecontroller::class, "chitiet"])->name("chitiet");

//Đường dẫn site quảm trị
///admin/{table}/{function}
Route::prefix("/admin")->name("admin.")->middleware("auth")->group(function () {
    Route::prefix("/danhmuc")->name("danhmuc.")->group(function () {
        Route::get('/danh_sach', [DanhMucController::class, "index"])->name("index");
        Route::get('/tao_danh_muc', [DanhMucController::class, "create"])->name("create");
        Route::get('/{id}/sua_danh_muc', [DanhMucController::class, "edit"])->name("edit");
        //id có ? là ko bắt buộc. id phải nằm ở cuối url
        Route::post('/luu/{id?}', [DanhMucController::class, "upsert"])->name("upsert");
        //xóa
        Route::post('/xoa/{id?}', [DanhMucController::class, "destroy"])->name("destroy");
    });

    Route::prefix("/sanpham")->name("sanpham.")->group(function () {
        Route::get('/danh_sach_san_pham', [SanPhamController::class, "index"])->name("index");
        Route::get('/tao_san_pham', [SanPhamController::class, "create"])->name("create");
        //sửa
        Route::get('/{id}/sua_san_pham', [SanPhamController::class, "edit"])->name("edit");
        //id có ? là ko bắt buộc. id phải nằm ở cuối url
        Route::post('/luu/{id?}', [SanPhamController::class, "upsert"])->name("upsert");
        //xóa
        Route::post('/xoa/{id?}', [SanPhamController::class, "destroy"])->name("destroy");
    });

    Route::prefix("/tintuc")->name("tintuc.")->group(function () {
        Route::get('/danh_sach_tin_tuc', [TinTucController::class, "index"])->name("index");
        Route::get('/tao_tin_tuc', [TinTucController::class, "create"])->name("create");
        //sửa
        Route::get('/{id}/sua_tin_tuc', [TinTucController::class, "edit"])->name("edit");
        Route::post('/luu/{id?}', [TinTucController::class, "upsert"])->name("upsert");
        //xóa
        Route::post('/xoa/{id?}', [TinTucController::class, "destroy"])->name("destroy");
    });

    Route::prefix("/muasanpham")->name("muasanpham.")->group(function () {
        // mua
        Route::get('/danh_sach_mua', [MuaSanPhamController::class, "index"])->name("index");
        Route::get('/create', [MuaSanPhamController::class, "create"])->name("create");
        Route::get('/{id}/sua_san_pham_mua', [MuaSanPhamController::class, "edit"])->name("edit");
        Route::post('/luu/{id?}', [MuaSanPhamController::class, "upsert"])->name("upsert");
        Route::post('/xoa/{id?}', [MuaSanPhamController::class, "destroy"])->name("destroy");
    });
});
//DĂNG KÍ
Route::get("/dang-ky", [AccountController::class, "register"])->name("account.register");
Route::post('/dang-ky', [AccountController::class, "save"])->name("account.save");
//ĐĂNG NHẬP
Route::get("/dang-nhap", [AccountController::class, "login"])->name("account.login");
Route::post("/dang-nhap", [AccountController::class, "auth"])->name("account.auth");
Route::get("/dang-xuat", [AccountController::class, "logout"])->name("account.logout");
