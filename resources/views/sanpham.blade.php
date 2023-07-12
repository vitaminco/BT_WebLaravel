<x-admin-layout title="Sản phẩm">
    {{-- banner --}}
    <div class="industry-banner text-center page-banner"
        style="background-image: url(https://www.kiotviet.vn/wp-content/uploads/2021/12/thoitrang.jpg); background-size: cover; background-repeat: no-repeat; height: 395px;">
        <div class="container-wrap" style="padding: 154px;text-align: center; display: block">
            <h1 class="industry-heading mb-0" style="color: #fff;">Giang hàng sản phẩm</h1>
            <h1 class="industry-heading" style="color: #fff;"> Shop thời trang</h1>
        </div>
    </div>

    {{-- <div class="industry-banner text-center page-banner"
        style="background-image: url(https://www.kiotviet.vn/wp-content/uploads/2021/12/kiotviet.jpg); background-size: cover; background-repeat: no-repeat;">
        <div class="container-wrap">
            <h1 class="industry-heading mb-0">Phần mềm quản lý bán hàng</h1>
            <h1 class="industry-heading">Ngành hàng bán lẻ</h1>
            <button class="btn btn-primary industry-btn box-popup-register">Dùng thử miễn phí</button>
        </div>
    </div> --}}
    {{--  --}}

    <div class="container" style="margin: 10px auto">
        <div class="row row-cols-4">
            @foreach ($data as $item)
                <a href="{{ route('chitiet', ['id' => $item->id]) }}" class="col">
                    <title>{{ $item->ten_san_pham }}</title>
                    <img src="{{ $item->anh_cover }}" width=100% height="200px" />
                    <div style="display: flex; justify-content: space-between; padding: 10px">
                        <h4>{{ $item->ten_san_pham }}</h4>
                        <p>Giá: {{ number_format($item->gia) }}</p>
                    </div>
                    <p>{{ $item->mo_ta }}</p>
                    <hr>
                </a>
            @endforeach
            {{-- giao diện phan trang --}}
            {{ $data->links() }}
        </div>
    </div>
</x-admin-layout>
