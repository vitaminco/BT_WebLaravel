<x-admin-layout title="HNH">
    {{-- phần chuyển động đầu trang --}}
    <div id="myCarousel" class="carousel slide" style="margin: -149px 0 0 0;" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            @foreach ($datab as $item)
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="{{ $item->anh_cover }}" width="100%" height="700" style="object-fit: cover; " />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <p><a class="btn btn-lg btn-primary" href="{{ route('chitiet', ['id' => $item->id]) }}">Xem
                                    chi tiết</a></p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    {{-- phần hiển thị danh mục --}}
    <div class="container marketing" style="padding: 20px">
        <div class="row" style="background-color: cornsilk;border-radius: 20px;">
            @foreach ($data1 as $item)
                <a href="{{ route('dm_sp', ['id' => $item->id]) }}" class="col-lg-4 center">
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
        <div class="row row-cols-2 row-cols-lg-3"
            style="background-color: rgba(234, 234, 234, 0.496);border-radius: 20px;padding: 0 21px;">
            @foreach ($data as $item)
                <a href="{{ route('chitiet', ['id' => $item->id]) }}" class="col-4 col-lg-2 products">
                    <title>{{ $item->ten_san_pham }}</title>
                    <img src="{{ $item->anh_cover }}" width=100% height="250px"
                        style="object-fit: cover;border-radius: 2px" />
                    <div style="display: flex; justify-content: space-between; padding: 10px">
                        <h4>{{ $item->ten_san_pham }}</h4>
                        <p>Giá: {{ number_format($item->gia) }}</p>
                    </div>
                    <p style="padding: 0 10px;max-height: 50px;overflow: hidden;">{{ $item->mo_ta }}</p>
                </a>
            @endforeach
            {{-- giao diện phan trang --}}
            {{ $data->links() }}
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
            <div class="row">
                @foreach ($data2 as $item)
                    <a href="{{ route('chitiettin', ['id' => $item->id]) }}" class="col tin"
                        style="display: flex;width:200px; margin: 10px; background-color: rgba(234, 234, 234, 0.496);border-radius: 10px;">

                        <title>{{ $item->ten_tin_tuc }}</title>
                        <div class="col-sm-4"style="display: flex;flex-direction: column;justify-content: center;">
                            <img src="{{ $item->anh_cover }}" style="border-radius: 20px;margin-left: 24px;"
                                width="100%" height="80%" />
                        </div>
                        <div class="col-sm-4">
                            <div style="margin: 30px 0 0 43px;">
                                <h4>{{ $item->ten_tin_tuc }}</h4>
                                <p style="padding: 0 10px;max-height: 74px;width: 237%;overflow: hidden;">
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
</x-admin-layout>
