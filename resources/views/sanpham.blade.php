<x-admin-layout title="Sản phẩm">
    {{-- banner --}}
    <div class="industry-banner text-center page-banner"
        style="background-image: url(https://www.kiotviet.vn/wp-content/uploads/2021/12/thoitrang.jpg); background-size: cover; background-repeat: no-repeat; height: 395px;">
        <div class="container-wrap" style="padding: 154px;text-align: center; display: block">
            <h1 class="industry-heading mb-0" style="color: #fff;">Giang hàng bán vé</h1>
            <h1 class="industry-heading" style="color: #fff;"> Nơi có những bộ chất lượng</h1>
        </div>
    </div>
    <div class="container" style="margin: 10px auto">
        <div class="row row-cols-2 row-cols-lg-3"style="background-color: cornsilk;border-radius: 3px;padding: 0 21px;">
            @foreach ($data as $item)
                <a href="{{ route('chitiet', ['id' => $item->id]) }}" class="col-4 col-lg-2 products">
                    <title>{{ $item->ten_san_pham }}</title>
                    <img src="{{ $item->anh_cover }}" width=100% height="250px" style="object-fit: cover; " />
                    <div style="padding: 10px">
                        <p style="max-height: 46px;overflow: hidden;">{{ $item->ten_san_pham }}
                        </p>
                        <p><b>Giá:</b> {{ number_format($item->gia) }}.000đ</p>
                        <p><b>Số lượng:</b> {{ $item->so_luong_ton }}<i class="bi bi-ticket-detailed"></i></p>
                    </div>
                    <p style="padding: 0 10px;max-height: 50px;overflow: hidden;">{{ $item->mo_ta }}</p>
                </a>
            @endforeach
            {{-- giao diện phan trang --}}
            {{ $data->links() }}
        </div>
    </div>
</x-admin-layout>
