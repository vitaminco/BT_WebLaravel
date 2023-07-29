<x-admin-layout title="HNH">
    {{-- phần chuyển động đầu trang --}}
    <div id="carouselExampleFade" class="carousel slide carousel-fade" style="margin: -149px 0 0 0;"
        data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($datab as $item)
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="{{ $item->anh_cover }}" width="100%" height="700" style="object-fit: cover; " />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <a class="btn btn-lg btn-outline-primary"
                                href="{{ route('chitiet', ['id' => $item->id]) }}">Xem
                                chi tiết</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- phần hiển thị danh mục --}}
    <div class="container marketing" style="padding: 20px">
        <div class="row row-cols-4 text-center justify-content-md-center"
            style="background-color: cornsilk;border-radius: 20px;padding: 20px 0;">
            @foreach ($data1 as $item)
                <a href="{{ route('dm_sp', ['id' => $item->id]) }}" class="col">
                    <title>{{ $item->ten_danh_muc }}</title>
                    <img src="{{ $item->anh_cover }}" width=150 height="150px"
                        style="border-radius: 100%;object-fit: cover" />
                    <h2>{{ $item->ten_danh_muc }}</h2>
                    <p></p>
                    <p class="btn btn-warning sidebar">Xem ngay &raquo; </p>
                </a>
            @endforeach
        </div>
    </div>
    {{-- Phần hiển thị hình sản phẩm --}}
    <div class="container">
        <h1 style="display: block; text-align: center; padding: 30px">Sản phẩm nổi bật</h1>
        <div class="row row-cols-2 row-cols-lg-3 justify-content-md-center"
            style="background-color: rgba(234, 234, 234, 0.496);border-radius: 20px;padding: 0 21px;">
            @foreach ($data as $item)
                <a href="{{ route('chitiet', ['id' => $item->id]) }}" class="col-4 col-lg-2 products">
                    <title>{{ $item->ten_san_pham }}</title>
                    <img src="{{ $item->anh_cover }}" width=100% height="250px"
                        style="object-fit: cover;border-radius: 2px" />
                    <div style="padding: 10px">
                        <p style="max-height: 46px;overflow: hidden;">{{ $item->ten_san_pham }}
                        </p>
                        <p><b>Giá:</b> {{ number_format($item->gia) }}.000đ</p>
                        <p><b>Số lượng:</b> {{ $item->so_luong_ton }} <i class="bi bi-ticket-detailed"></i></p>
                    </div>
                    <p style="padding: 0 10px;max-height: 50px;overflow: hidden;">{{ $item->mo_ta }}</p>
                </a>
            @endforeach
        </div>
        <div style="text-align: center">
            <button class="btn btn-outline-success" style="border-radius:50px; margin: 10px ">
                <a href="{{ route('sanpham') }} " style="font-weight: 600">Xem tất cả
                    <i class="bi bi-arrow-right-circle"></i>
                </a>
            </button>
        </div>
        {{-- tin tức --}}
        <div class="container">
            <h1 style="display: block; text-align: center; padding: 30px">Tin tức nổi bật</h1>
            <div class="row justify-content-center">
                @foreach ($data2 as $item)
                    <a href="{{ route('chitiettin', ['id' => $item->id]) }}" class="col-6 tin"
                        style="display: flex;width: 47%; margin: 10px; background-color: #fff;border-radius: 10px;">

                        <title>{{ $item->ten_tin_tuc }}</title>
                        <div class="col-sm-4"style="display: flex;flex-direction: column;justify-content: center;">
                            <img src="{{ $item->anh_cover }}"
                                style="border-radius: 20px;margin-left: 24px;object-fit: cover;" width="100%"
                                height="80%" />
                        </div>
                        <div class="col-sm-4">
                            <div style="margin: 30px 0 0 43px;">
                                <h4 style="width: 345px;">{{ $item->ten_tin_tuc }}</h4>
                                <p style="padding: 0 10px;max-height: 148px;width: 237%;overflow: hidden;">
                                    {{ $item->mo_ta }}</p>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
            <div style="text-align: center">
                <button class="btn btn-outline-success" style="border-radius:50px; margin: 10px "><a
                        href="{{ route('tintuc') }}" style="font-weight: 600">Tất cả tin tức
                        <i class="bi bi-arrow-right-circle"></i>
                    </a></button>
            </div>
        </div>
    </div>

    <div class="container"style="background-color: #fff;border-radius: 54px;margin: 20px auto;padding: 84px;">
        <div class="box-title text-center" style="margin-top:0;">
            <h3 class="industry-heading" style="font-weight: 700;">HNH cung cấp cho bạn nhiều mặt hàng, sản phẩm chất
                lượng</h3>
        </div>
        <div class="row introduces-list text-center">
            <div class="col-md-4 introduces-item">
                <img src="https://www.kiotviet.vn/wp-content/uploads/2021/12/Icon.png" alt="Đơn giản &amp; Dễ sử dụng"
                    width="" height="" class="introduces-icon lazy">
                <h5 class="introduces-title">Đơn giản &amp; Dễ sử dụng</h5>
                <h6 class="introduces-txt mb-0">Giao diện đơn giản, thân thiện và thông minh. Chỉ mất 15
                    phút làm quen để mua hàng.</h6>
            </div>
            <div class="col-md-4 introduces-item">
                <img src="https://www.kiotviet.vn/wp-content/uploads/2021/12/Icon-1.png"
                    alt="Phù hợp cho từng ngành hàng" width="" height="" class="introduces-icon lazy">
                <h5 class="introduces-title">Phù hợp cho từng ngành hàng</h5>
                <h6 class="introduces-txt mb-0">Phần mềm phù hợp cho hơn 20 ngành hàng khác nhau với cả
                    bán buôn, bán lẻ và bán online.</h6>
            </div>
            <div class="col-md-4 introduces-item">
                <img src="https://www.kiotviet.vn/wp-content/uploads/2021/12/Icon-2.png" alt="Tiết kiệm chi phí"
                    width="" height="" class="introduces-icon lazy">
                <h5 class="introduces-title">Tiết kiệm chi phí</h5>
                <h6 class="introduces-txt mb-0">Cung cấp nhiều dịch vụ. Rẻ hơn
                    một ly trà đá mỗi ngày.</h6>
            </div>
        </div>
    </div>
</x-admin-layout>
