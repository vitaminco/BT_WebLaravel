<x-admin-layout title="Sản phẩm">
    {{-- banner --}}
    <div class="industry-banner text-center page-banner bg-danger">
        <div class="container-wrap page-banner-content">
            <h1 class="industry-heading mb-0 text-white">Giang hàng vé</h1>
            <h1 class="industry-heading text-white">Nơi có những chiếc vé chất lượng</h1>
        </div>
    </div>
    <div class="container mt-3">
        <div class="row row-cols-2 row-cols-lg-3 justify-content-md-center product-list"
            style="background-color: cornsilk">
            @foreach ($data as $item)
                <a href="{{ route('chitiet', ['id' => $item->id]) }}" class="col-4 col-lg-2 product-item"
                    data-aos="fade-up">
                    <title>{{ $item->ten_san_pham }}</title>
                    <img src="{{ $item->anh_cover }}" width=100% height="250px" />
                    <hr />
                    <div class="product-info">
                        <p class="product-name">
                            {{ $item->ten_san_pham }}
                        </p>
                        <p data-aos="fade-right" data-aos-offset="10" data-aos-easing="ease-in-sine"><b>Giá:</b>
                            {{ number_format($item->gia, 0, ',', '.') . ' ' . '' }}đ</p>

                        <p data-aos="fade-right" data-aos-offset="50" data-aos-easing="ease-in-sine"><b>Số lượng:</b>
                            {{ $item->so_luong_ton }} <i class="bi bi-ticket-detailed"></i></p>
                    </div>
                    <p class="product-content" data-aos="fade-right" data-aos-offset="100"
                        data-aos-easing="ease-in-sine">{{ $item->mo_ta }}</p>
                </a>
            @endforeach
            {{-- giao diện phan trang --}}
            {{ $data->links() }}
        </div>
    </div>
</x-admin-layout>
