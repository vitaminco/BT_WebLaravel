<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\Admin\DanhMucController;
use App\Http\Controllers\Admin\SanPhamController;
use App\Http\Controllers\Admin\TinTucController;
use App\Http\Controllers\Admin\HelpController;
use App\Http\Controllers\Admin\BangGiaController;
use App\Http\Controllers\Admin\CauHinhController;
use App\Http\Controllers\Admin\DongGopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\MuaSanPhamController;
use App\Models\SanPham;
use App\Models\DanhMuc;
use App\Models\MuaSanPham;

Route::get('/', [Homecontroller::class, "index"])->name("home");

Route::get('indexSanPham', [Homecontroller::class, "indexSanPham"])->name("sanpham");
Route::get('/{id}/dm_sp', [Homecontroller::class, "dm_sp"])->name("dm_sp");
Route::get('/{id}/chitiet', [Homecontroller::class, "chitiet"])->name("chitiet");
Route::get('indexTinTuc', [Homecontroller::class, "indexTinTuc"])->name("tintuc");
Route::get('/{id}/chitiettin', [Homecontroller::class, "chitiettin"])->name("chitiettin");
Route::get('indexAdmin', [Homecontroller::class, "indexAdmin"])->name("index_Admin");
Route::get('/banggia', [Homecontroller::class, "banggia"])->name("banggia");
Route::get('/help', [Homecontroller::class, "help"])->name("help");
Route::get('/{id}/chitietdon', [MuaSanPhamController::class, "chitietdon"])->name("chitietdon");

//Đường dẫn site quảm trị
///admin/{table}/{function}
Route::prefix("/admin")->name("admin.")->middleware("auth")->group(function () {
    Route::prefix("/category")->name("category.")->group(function () {
        Route::get('/category-list', [DanhMucController::class, "index"])->name("index");
        Route::get('/create', [DanhMucController::class, "create"])->name("create");
        Route::get('/{id}/edit', [DanhMucController::class, "edit"])->name("edit");
        //id có ? là ko bắt buộc. id phải nằm ở cuối url
        Route::post('/luu/{id?}', [DanhMucController::class, "upsert"])->name("upsert");
        //xóa
        Route::post('/xoa/{id?}', [DanhMucController::class, "destroy"])->name("destroy");
    });

    Route::prefix("/product")->name("sanpham.")->group(function () {
        Route::get('/product-list', [SanPhamController::class, "index"])->name("index");
        Route::get('/create', [SanPhamController::class, "create"])->name("create");
        //sửa
        Route::get('/{id}/edit', [SanPhamController::class, "edit"])->name("edit");
        //id có ? là ko bắt buộc. id phải nằm ở cuối url
        Route::post('/luu/{id?}', [SanPhamController::class, "upsert"])->name("upsert");
        //xóa
        Route::post('/xoa/{id?}', [SanPhamController::class, "destroy"])->name("destroy");
    });

    Route::prefix("/news")->name("tintuc.")->group(function () {
        Route::get('/news-list', [TinTucController::class, "index"])->name("index");
        Route::get('/create', [TinTucController::class, "create"])->name("create");
        //sửa
        Route::get('/{id}/edit', [TinTucController::class, "edit"])->name("edit");
        Route::post('/luu/{id?}', [TinTucController::class, "upsert"])->name("upsert");
        //xóa
        Route::post('/xoa/{id?}', [TinTucController::class, "destroy"])->name("destroy");
    });

    Route::prefix("/admin")->name("admin.")->group(function () {
        Route::get('/account-list', [AccountController::class, "index"])->name("index");
        Route::get('/{id}/edit', [AccountController::class, "edit_admin"])->name("edit_admin");
        Route::post('/luu/{id?}', [AccountController::class, "upsert"])->name("upsert");
        Route::post('/xoa/{id?}', [AccountController::class, "destroy"])->name("destroy");
    });

    Route::prefix("/donggop")->name("donggop.")->group(function () {
        Route::get('/danh_sach_dong_gop', [DongGopController::class, "index"])->name("index");
        Route::get('/{id}/create', [DongGopController::class, "create"])->name("create");
        Route::post('/luu/{id?}', [DongGopController::class, "upsert"])->name("upsert");
        Route::post('/xoa/{id?}', [DongGopController::class, "destroy"])->name("destroy");
    });

    Route::prefix("/cauhinh")->name("cauhinh.")->group(function () {
        Route::get('/cau_hinh', [CauHinhController::class, "index"])->name("index");
        Route::get('/create', [CauHinhController::class, "create"])->name("create");
        Route::get('/{id}/edit', [CauHinhController::class, "edit"])->name("edit");
        Route::post('/luu/{id?}', [CauHinhController::class, "upsert"])->name("upsert");
        Route::post('/xoa/{id?}', [CauHinhController::class, "destroy"])->name("destroy");
    });

    Route::prefix("/cost")->name("banggia.")->group(function () {
        Route::get('/cost-list', [BangGiaController::class, "index"])->name("index");
        Route::get('/create', [BangGiaController::class, "create"])->name("create");
        Route::get('/{id}/edit', [BangGiaController::class, "edit"])->name("edit");
        Route::post('/luu/{id?}', [BangGiaController::class, "upsert"])->name("upsert");
        Route::post('/xoa/{id?}', [BangGiaController::class, "destroy"])->name("destroy");
    });

    Route::prefix("/help")->name("help.")->group(function () {
        Route::get('/help', [HelpController::class, "index"])->name("index");
        Route::get('/create', [HelpController::class, "create"])->name("create");
        Route::get('/{id}/edit', [HelpController::class, "edit"])->name("edit");
        Route::post('/luu/{id?}', [HelpController::class, "upsert"])->name("upsert");
        Route::post('/xoa/{id?}', [HelpController::class, "destroy"])->name("destroy");
    });
});

///admin/{table}/{function}
Route::prefix("/clients")->name("clients.")->middleware("auth")->group(function () {
    Route::prefix("/muasanpham")->name("muasanpham.")->group(function () {
        // mua
        Route::get('/buy-list', [MuaSanPhamController::class, "index"])->name("index");
        Route::get('/{id}/create', [MuaSanPhamController::class, "create"])->name("create");
        Route::get('/{id}/edit', [MuaSanPhamController::class, "edit"])->name("edit");
        Route::post('/luu/{id?}', [MuaSanPhamController::class, "upsert"])->name("upsert");
        Route::post('/xoa/{id?}', [MuaSanPhamController::class, "destroy"])->name("destroy");
    });

    Route::prefix("/account")->name("account.")->group(function () {
        Route::get('/{id}/edit-account', [AccountController::class, "edit"])->name("edit");
        Route::post('/luu/{id?}', [AccountController::class, "upsert"])->name("upsert");
    });
});

//DĂNG KÍ
Route::get("/dang-ky", [AccountController::class, "register"])->name("account.register");
Route::post('/dang-ky', [AccountController::class, "save"])->name("account.save");
//ĐĂNG NHẬP
Route::get("/dang-nhap", [AccountController::class, "login"])->name("account.login");
Route::post("/dang-nhap", [AccountController::class, "auth"])->name("account.auth");
Route::get("/dang-xuat", [AccountController::class, "logout"])->name("account.logout");
