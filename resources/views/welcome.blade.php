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

            @foreach ($data as $item)
                <div class="carousel-item active">
                    <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg"
                        aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <img src="{{ $item->anh_cover }}" width="100%" height="100%" />
                    </svg>

                    <div class="container">
                        <div class="carousel-caption text-start">
                            <h1>
                                {{ $item->ten_san_pham }}
                            </h1>
                            <p>{{ $item->mo_ta }}</p>
                            <p><a class="btn btn-lg btn-primary" href="#">Click here</a></p>
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
    <div class="container marketing">
        <div class="row">
            @foreach ($data as $item)
                <div class="col-lg-4 center">
                    <svg class="bd-placeholder-img rounded-circle" width="140" height="140"
                        xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 140x140"
                        preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>{{ $item->danh_mucs->ten_danh_muc ?? '' }}</title>
                        <rect width="100%" height="100%" fill="#777" /><text x="50%" y="50%"
                            fill="#777" dy=".3em">140x140</text>
                    </svg>

                    <h2>{{ $item->danh_mucs->ten_danh_muc ?? '' }}</h2>
                    <p></p>
                    <p><a class="btn btn-secondary" href="#">View details &raquo;</a></p>
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
                </a>
            @endforeach
            {{-- giao diện phan trang --}}
            {{-- $data->links() --}}
        </div>

        <div class="row">
            <div class="col-8">
                <a href="{{ route('sanpham') }}">XEM TẤT CẢ</a>
            </div>
            <div class="col-4">
                <div class="spinner-grow text-primary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-secondary" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-success" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-danger" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-warning" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-info" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-light" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <div class="spinner-grow text-dark" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
            </div>
        </div>
    </div>
    {{-- tin tức --}}
    <div class="container">
        <h1 style="display: block; text-align: center; padding: 30px">Tin tức nổi bật</h1>
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <div class="col">
                        1 of 2
                    </div>
                    <div class="col">
                        2 of 2
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="col">
                    1 of 2
                </div>
            </div>
        </div>
    </div>

</x-admin-layout>
{{--  --}}
<div class="row">
    <div class="col-12 table-responsive">
        <table class="table" border="5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Gía</th>
                    <th>Tên danh mục</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>
                    <th>ID danh mục</th>
                    <th>Ngày tạo</th>
                    <th>Ngày update</th>
                </tr>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->ten_san_pham }}</td>
                        <td>{{ number_format($item->gia) }}</td>
                        <td>{{ $item->danh_mucs->ten_danh_muc ?? '' }}</td>
                        <td>{{ $item->mo_ta }}</td>
                        <td>
                            <img src="{{ $item->anh_cover }}" width=100 />
                        </td>
                        <td>{{ $item->id_danh_muc }}</td>
                        <td>{{ $item->created_at->format('d/m/Y') }}</td>
                        <td>{{ $item->updated_at->format('d/m/Y') }}</td>
                    </tr>
                @endforeach
            </tbody>
            </thead>
        </table>
    </div>
</div>
