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
                        <img src="{{ $item->anh_cover }}" width="100%" height="100%" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <p><a class="btn btn-lg btn-primary" href="#">Xem chi tiết</a></p>
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

    {{-- phần thân --}}
    <div class="container marketing" style="padding: 20px">
        <div class="row">
            @foreach ($data1 as $item)
                <div class="col-lg-4 center">
                    <title>{{ $item->ten_danh_muc }}</title>
                    <img src="{{ $item->anh_cover }}" width=150 height="150px" style="border-radius: 100%" />

                    <h2>{{ $item->ten_danh_muc }}</h2>
                    <p></p>
                    <p><a class="btn btn-warning" href="#">Xem ngay &raquo;</a></p>
                </div><!-- /.col-lg-4 -->
            @endforeach
        </div><!-- /.row -->
    </div>

    {{-- Phần hiển thị hình --}}
    <div class="container">
        <div class="row">
            @foreach ($data as $item)
                <a href="{{ route('chitiet', ['id' => $item->id]) }}" class="col-6 col-md-4">
                    <title>{{ $item->ten_san_pham }}</title>
                    <img src="{{ $item->anh_cover }}" width=100% />
                    <div style="display: flex; justify-content: space-between; padding: 10px">
                        <h4>{{ $item->ten_san_pham }}</h4>
                        <p>Giá: {{ number_format($item->gia) }}</p>
                    </div>
                    <p style="padding: 0 10px;max-height: 50px;overflow: hidden;">{{ $item->mo_ta }}</p>
                </a>
            @endforeach
            {{-- giao diện phan trang --}}
            {{-- {{ $data->links() }} --}}
        </div>

        <div class="row">
            <div class="col-8">
                <a href="{{ route('sanpham') }}">XEM TẤT CẢ</a>
            </div>
            <div class="col-4">
                <div class="spinner-grow text-warning" style="background-color: transparent;--bs-spinner-width: 30rem;"
                    role="status">
                    <span class="visually-hidden">XEM</span>
                    <h1>Xem thêm</h1>
                </div>
            </div>
        </div>
    </div>
    {{-- tin tức --}}
    <div class="container">
        <h1 style="display: block; text-align: center; padding: 30px">Tin tức nổi bật</h1>
        <div class="row">
            @foreach ($data2 as $item)
                <a href="{{ route('chitiettin', ['id' => $item->id]) }}"
                    class="col tin"style="display: flex;width:200px; margin: 10px;">

                    <title>{{ $item->ten_tin_tuc }}</title>
                    <div class="col-sm-4">
                        <img src="{{ $item->anh_cover }}" style="border-radius: 20px;" width="100%" height="80%" />
                    </div>
                    <div class="col-sm-4">
                        <div style="padding: 10px">
                            <h4>{{ $item->ten_tin_tuc }}</h4>
                            <p style="padding: 0 10px;max-height: 74px;width: 237%;overflow: hidden;">
                                {{ $item->mo_ta }}</p>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
        <div style="text-align: center">
            <button class="btn btn-outline-success" style="border-radius:50px; margin: 10px "><a href=""
                    style="font-weight: 600">Tất cả tin tức</a></button>
        </div>
    </div>

</x-admin-layout>
