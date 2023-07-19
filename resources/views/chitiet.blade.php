<x-admin-layout title="Chi tiết sản phẩm">
    {{-- banner --}}
    <div class="industry-banner text-center page-banner"
        style="background-image: url(https://www.kiotviet.vn/wp-content/uploads/2021/12/kiotviet.jpg); background-size: cover; background-repeat: no-repeat; height: 395px;">
        <div class="container-wrap" style="padding: 154px;text-align: center; display: block">
            <h1 class="industry-heading mb-0" style="color: #fff;">Giang hàng bán vé</h1>
            <h1 class="industry-heading" style="color: #fff;"> Thông tin vé</h1>
        </div>
    </div>
    {{--  --}}

    <div class="container">
        <div class="row" style="margin: 10px">
            <div class="col-8">
                <title>{{ $data->ten_san_pham }}</title>
                <img src="{{ $data->anh_cover }}" width=100% height="500" style="object-fit: cover; " />
            </div>
            <div class="col-4">
                <div class="p-4 p-md-5 border rounded-3 bg-light">
                    <div style=" padding: 10px; font-weight: 700; font-size: 1.2rem">
                        <p>{{ $data->ten_san_pham }}</p> <br>
                        <p>Giá: {{ number_format($data->gia) }}.000đ</p> <br>
                        <p><b>Số lượng:</b> {{ $data->so_luong_ton }}</p>
                    </div>
                    <p><b>Mô tả: </b>{{ $data->mo_ta }}</p>
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
                <a class="btn btn-primary" aria-current="page"
                    href="{{ route('admin.donggop.create', ['id' => $data->id]) }}">
                    <i class="bi bi-plus-circle-dotted"></i> Thêm góp ý
                </a>
            </div>
            @foreach ($data1 as $item)
                <div class="d-flex text-muted pt-3" style="justify-content: space-between;">
                    <div class="d-flex">
                        <img src="{{ $item->users->avatar ?? '' }}" width=30 height="30"
                            style="object-fit: cover;border-radius:50%; margin: 5px " />
                        <p class="pb-3 mb-0 small lh-sm border-bottom">
                            <strong class="d-block text-gray-dark">@ {{ $item->users->name ?? '' }}</strong>Nội dung:
                            {{ $item->mo_ta }}
                        </p>
                    </div>
                    <form class="d-inline" action="{{ route('admin.donggop.destroy', ['id' => $item->id]) }}"
                        method="POST" style="">
                        @csrf
                        <button type="submit" class="btn"><i class="bi bi-trash"></i></button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
</x-admin-layout>
