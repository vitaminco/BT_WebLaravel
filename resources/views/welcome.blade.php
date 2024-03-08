<x-admin-layout title="HNH">
    {{-- phần chuyển động đầu trang --}}
    <div id="carouselExampleFade" class="carousel slide carousel-fade" style="margin: -149px 0 0 0;"
        data-bs-ride="carousel">
        <div class="carousel-inner">

            @foreach ($datab as $item)
                <a class="carousel-item active" href="{{ route('chitiet', ['id' => $item->id]) }}">
                    <svg class="bd-placeholder-img" width="100%" xmlns="http://www.w3.org/2000/svg" aria-hidden="true"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="{{ $item->anh_cover }}" width="100%" height="700" style="object-fit: cover; " />
                    </svg>
                </a>
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
    <div class="container marketing">
        <div class="row row-cols-4 text-center justify-content-md-center category-list">
            @foreach ($data1 as $item)
                <a href="{{ route('dm_sp', ['id' => $item->id]) }}" class="col category-item" data-aos="flip-left">
                    <title>{{ $item->ten_danh_muc }}</title>
                    <img src="{{ $item->anh_cover }}" width=150 height="150px" />
                    <h2>{{ $item->ten_danh_muc }}</h2>
                    <p></p>
                    <p class="btn btn-warning sidebar">Xem ngay &raquo; </p>
                </a>
            @endforeach
        </div>
    </div>
    {{-- Phần hiển thị hình sản phẩm --}}
    <div class="container">
        <h1 class="text-center padding-text">Vé mới nhất
        </h1>
        <div class="row row-cols-2 row-cols-lg-3 justify-content-md-center product-list">
            @foreach ($data as $item)
                <a href="{{ route('chitiet', ['id' => $item->id]) }}" class="col-4 col-lg-2 product-item"
                    data-aos="fade-up">
                    <div>
                        <title>{{ $item->ten_san_pham }}</title>
                        <img src="{{ $item->anh_cover }}" width=100% height="250px" />
                        <hr />
                        <div class="product-info">
                            <p class="product-name">
                                {{ $item->ten_san_pham }}
                            </p>
                            <p data-aos="fade-right" data-aos-offset="10" data-aos-easing="ease-in-sine"><b>Giá:</b>
                                {{ number_format($item->gia, 0, ',', '.') . ' ' . '' }}đ</p>

                            <p data-aos="fade-right" data-aos-offset="50" data-aos-easing="ease-in-sine"><b>Số
                                    lượng:</b>
                                {{ $item->so_luong_ton }} <i class="bi bi-ticket-detailed"></i></p>
                        </div>
                        <p class="product-content" data-aos="fade-right" data-aos-offset="100"
                            data-aos-easing="ease-in-sine">{{ $item->mo_ta }}</p>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="text-center mt-3 show-more">
            <a href="{{ route('sanpham') }} " class="btn btn-outline-success">Xem tất cả
                <i class="bi bi-arrow-right-circle"></i>
            </a>
        </div>
    </div>

    {{-- tin tức --}}
    <div class="container">
        <h1 class="text-center padding-text">Tin tức nổi bật</h1>
        <div class="row justify-content-center">
            @foreach ($data2 as $item)
                <a href="{{ route('chitiettin', ['id' => $item->id]) }}" class="news-item" data-aos="fade-down">
                    <div class="col-4 news-img">
                        <img src="{{ $item->anh_cover }}" width="100%" height="300px" />
                    </div>
                    <div class="col-8 news-content">
                        <h4>{{ $item->ten_tin_tuc }}</h4>
                        <p> {{ $item->mo_ta }}</p>
                    </div>
                </a>
            @endforeach
        </div>

        <div class="text-center mt-3 show-more">
            <a href="{{ route('tintuc') }} " class="btn btn-outline-success">Xem tất cả
                <i class="bi bi-arrow-right-circle"></i>
            </a>
        </div>
    </div>

    <div class="container intro-page">
        <div class="box-title text-center">
            @foreach ($datach as $item)
                <h3 class="industry-heading" style="font-weight: 700;">{{ $item->ten_cong_ty }} cung cấp cho bạn nhiều
                    vé xem phim, và dịch vụ chất lượng</h3>
            @endforeach
        </div>
        <div class="row introduces-list text-center mt-4">
            <div class="col-md-4 introduces-item">
                <img src="https://www.kiotviet.vn/wp-content/uploads/2021/12/Icon.png" alt="Đơn giản &amp; Dễ sử dụng"
                    width="" height="" class="introduces-icon lazy">
                <h5 class="introduces-title">Đơn giản &amp; Dễ sử dụng</h5>
                <h6 class="introduces-txt mb-0">Giao diện đơn giản, thân thiện và thông minh. Chỉ mất 15
                    phút làm quen để mua vé.</h6>
            </div>
            <div class="col-md-4 introduces-item">
                <img src="https://www.kiotviet.vn/wp-content/uploads/2021/12/Icon-1.png"
                    alt="Phù hợp cho từng ngành hàng" width="" height="" class="introduces-icon lazy">
                <h5 class="introduces-title">Phù hợp cho mọi đối tượng</h5>
                <h6 class="introduces-txt mb-0">Phần mềm phù hợp cho hơn 20 phòng khác nhau</h6>
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
