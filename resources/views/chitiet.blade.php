<x-admin-layout title="Chi tiết sản phẩm">
    {{-- banner --}}
    <div class="industry-banner text-center page-banner bg-danger">
        <div class="container-wrap page-banner-content">
            <h1 class="industry-heading mb-0 text-white">Giang hàng vé</h1>
            <h1 class="industry-heading text-white">Thông tin vé</h1>
        </div>
    </div>
    {{--  --}}
    <div class="container">
        <div class="row mt-3">
            <div class="col-8 ctl">
                <title>{{ $data->ten_san_pham }}</title>
                <img src="{{ $data->anh_cover }}" width=100% height="500" style="object-fit: cover; " />
            </div>
            <div class="col-4 ctr">
                <div class="p-4 p-md-5 border rounded-3 bg-light">
                    <div data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false"
                        aria-controls="multiCollapseExample1 multiCollapseExample2">
                        <div class="product-list-content">
                            <p>{{ $data->ten_san_pham }}</p>
                            <p>Giá: {{ number_format($data->gia, 0, ',', '.') . ' ' . '' }}đ</p>
                            <p><b>Số lượng:</b> {{ $data->so_luong_ton }}</p>
                        </div>
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                <p><b>Mô tả: </b>{{ $data->mo_ta }}</p>
                            </div>
                        </div>
                        <p class="text-danger">Xem thêm</p>
                    </div>

                    <div class="mt-3 text-center">
                        <button class="btn btn-outline-warning"><a class="text-danger"
                                href="{{ route('clients.muasanpham.create', ['id' => $data->id]) }}">MUA
                                NGAY</a></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Một vài sản phẩm --}}
    <div class="container">
        <h1 class="text-center mt-5 mb-5">Một vài vé khác</h1>
        <div class="row row-cols-2 row-cols-lg-3 justify-content-md-center product-list">
            @foreach ($datasp as $item)
                <a href="{{ route('chitiet', ['id' => $item->id]) }}" class="col-4 col-lg-2 product-item"
                    data-aos="fade-up">
                    <div>
                        <div class="product-header">
                            <div class="card_box">
                                <title>{{ $item->ten_san_pham }}</title>
                                <img src="{{ $item->anh_cover }}" width=100% height="250px" />
                                <span>
                                    <p>HẾT HẠN</p>
                                </span>
                            </div>
                        </div>
                        <hr />
                        <div>
                            <div class="product-info">
                                <p class="product-name">
                                    <b>{{ $item->ten_san_pham }}</b>
                                </p>
                                <p data-aos="fade-right" data-aos-offset="10" data-aos-easing="ease-in-sine"><b>Giá:</b>
                                    {{ number_format($item->gia, 0, ',', '.') . ' ' . '' }}đ</p>

                                <p data-aos="fade-right" data-aos-offset="50" data-aos-easing="ease-in-sine"><b>Số
                                        lượng:</b>
                                    {{ $item->so_luong_ton }} <i class="bi bi-ticket-detailed"></i></p>
                            </div>
                            <div>
                                <span>Đánh giá</span>
                                <div class="star_wrap">
                                    <input type="radio" name="rate" id="">
                                    <input type="radio" name="rate" id="">
                                    <input type="radio" name="rate" id="">
                                    <input type="radio" name="rate" id="">
                                    <input type="radio" name="rate" id="">
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            @endforeach
        </div>
    </div>

    {{-- phần góp ý --}}
    <div class="container">
        <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
            <h1 class=" mb-0 lh-1">Phản hồi</h1>
        </div>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="d-flex justify-content-center">
                <h6 class="border-bottom pb-2 mb-0">Recent comments</h6>
            </div>
            <div style="overflow-y: scroll; max-height: 500px;">
                @if (Auth::check())
                    @foreach ($data1 as $item)
                        <div class="d-flex text-muted pt-3 justify-content-between">
                            <div class="d-flex user-comment">
                                @if (Auth::user()->avatar != '')
                                    <img src="{{ $item->users->avatar ?? '' }} " width=30 height="30" />
                                @else
                                    <i class="bi bi-person-circle"></i>
                                @endif
                                <p class="pb-3 mb-0 small lh-sm">
                                    <strong class="d-block text-gray-dark"> {{ $item->users->name ?? '' }}</strong>
                                    <small>Nội dung: {{ $item->mo_ta }}</small>
                                </p>
                            </div>
                            @if ($item->id_users == Auth::user()->id)
                                <form class="d-inline"
                                    action="{{ route('admin.donggop.destroy', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn"><i class="bi bi-trash"></i></button>
                                </form>
                            @endif
                        </div>
                        <hr>
                    @endforeach
                @else
                    <h1>Vui lòng đăng nhập để xem và bình luận</h1>
                @endif
            </div>
        </div>
    </div>
    {{--  --}}
    @if (Auth::check())
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    @include('includes/errors')
                    <form action="{{ route('admin.donggop.upsert', ['id' => $data->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <x-app-input name="mo_ta" label="Góp ý" />
                        <div style="display: none;">
                            <x-app-select model="SanPham" name="id_san_phams" label="Sản phẩm"
                                displayMember="ten_san_pham" valueMember="id" selected="{{ $data->id }}" />
                            <x-app-select model="User" name="id_users" label="User" displayMember="name"
                                valueMember="id" selected="{{ Auth::user()->id }}" />
                        </div>
                        <div class="mt-3" style="float:right">
                            <input type="submit" class="btn btn-success" value="Góp ý " />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endif

</x-admin-layout>
