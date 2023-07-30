<x-admin-layout title="Chi tiết sản phẩm">
    {{-- banner --}}
    <div class="industry-banner text-center page-banner"
        style="background-image: url(https://www.kiotviet.vn/wp-content/uploads/2021/12/kiotviet.jpg); background-size: cover; background-repeat: no-repeat; height: 395px;">
        <div class="container-wrap" style="padding: 154px;text-align: center; display: block">
            <h1 class="industry-heading mb-0" style="color: #fff;">Giang hàng vé</h1>
            <h1 class="industry-heading" style="color: #fff;"> Thông tin vé</h1>
        </div>
    </div>
    {{--  --}}

    <div class="container">
        <div class="row" style="margin: 10px">
            <div class="col-8 ctl">
                <title>{{ $data->ten_san_pham }}</title>
                <img src="{{ $data->anh_cover }}" width=100% height="500" style="object-fit: cover; " />
            </div>
            <div class="col-4 ctr">
                <div class="p-4 p-md-5 border rounded-3 bg-light">
                    <div data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false"
                        aria-controls="multiCollapseExample1 multiCollapseExample2">
                        <div style=" padding: 10px; font-weight: 700; font-size: 1.2rem">
                            <p>{{ $data->ten_san_pham }}</p>
                            <p>Giá: {{ number_format($data->gia, 0, ',', '.') . ' ' . '' }}đ</p>
                            <p><b>Số lượng:</b> {{ $data->so_luong_ton }}</p>
                        </div>
                        <div class="collapse multi-collapse" id="multiCollapseExample1">
                            <div class="card card-body">
                                <p><b>Mô tả: </b>{{ $data->mo_ta }}</p>
                            </div>
                        </div>
                        <p style="cursor: pointer; color: blueviolet">Xem thêm</p>
                    </div>

                    <div class="mt-3" style="text-align: center;">
                        <button class="btn btn-outline-success"><a style="color: #f1d132"
                                href="{{ route('admin.muasanpham.create', ['id' => $data->id]) }}">MUA
                                NGAY</a></button>
                    </div>
                </div>
            </div>
        </div>
        {{-- phần góp ý --}}
        <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
            <h1 class=" mb-0 lh-1">Phản hồi</h1>
        </div>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="d-flex"style="justify-content: space-between;">
                <h6 class="border-bottom pb-2 mb-0">Recent comments</h6>
            </div>
            @if (Auth::check())
                @foreach ($data1 as $item)
                    <div class="d-flex text-muted pt-3" style="justify-content: space-between;">
                        <div class="d-flex">
                            @if (Auth::user()->avatar != '')
                                <img src="{{ $item->users->avatar ?? '' }}" width=30 height="30"
                                    style="object-fit: cover;border-radius:50%; margin: 5px " />
                            @else
                                <i class="bi bi-person-circle"></i>
                            @endif
                            <p class="pb-3 mb-0 small lh-sm border-bottom">
                                <strong class="d-block text-gray-dark">@ {{ $item->users->name ?? '' }}</strong>Nội
                                dung:
                                {{ $item->mo_ta }}
                            </p>
                        </div>
                        @if ($item->id_users == Auth::user()->id)
                            <form class="d-inline" action="{{ route('admin.donggop.destroy', ['id' => $item->id]) }}"
                                method="POST" style="">
                                @csrf
                                <button type="submit" class="btn"><i class="bi bi-trash"></i></button>
                            </form>
                        @endif
                    </div>
                @endforeach
            @else
                <h1>Vui lòng đăng nhập để xem và bình luận</h1>
            @endif
        </div>
    </div>
    {{--  --}}
    @if (Auth::check())
        <div
            style="background-image: url(https://img5.thuthuatphanmem.vn/uploads/2022/01/11/anh-mau-trang-don-gian_050632247.jpg)">
            <div class="container">
                <div class="row" style="background-color: rgba(147, 145, 145, 0.496)">
                    <div class="col-12">
                        <h2 class="mt-4">Góp ý nào!!!</h2>
                    </div>
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
                                <input type="submit" class="btn btn-success" value="Góp ý" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endif

</x-admin-layout>
