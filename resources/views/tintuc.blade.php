<x-admin-layout title="Sản phẩm">
    {{-- banner --}}
    <div class="industry-banner text-center page-banner"
        style="background-image: url(https://www.kiotviet.vn/wp-content/uploads/2021/12/thoitrang.jpg); background-size: cover; background-repeat: no-repeat;">
        <div class="container-wrap">
            <h1 class="industry-heading mb-0">Phần mềm quản lý bán hàng</h1>
            <h1 class="industry-heading"> Shop thời trang</h1>
            <button class="btn btn-primary industry-btn box-popup-register">Dùng thử miễn phí</button>
        </div>
    </div>
    {{--  --}}
    <div class="container" style="margin: 10px auto">
        <div class="row">
            @foreach ($data as $item)
                <div class="col-6 col-md-4">
                    <title>{{ $item->ten_tin_tuc }}</title>
                    <img src="{{ $item->anh_cover }}" width=100% />
                    <div style="display: flex; justify-content: space-between; padding: 10px">
                        <h4>{{ $item->ten_tin_tuc }}</h4>
                        <p>Giá giảm: {{ number_format($item->giam_gia) }}</p>
                    </div>
                    <hr>
                </div>
            @endforeach
            {{-- giao diện phan trang --}}
            {{ $data->links() }}
        </div>
    </div>
</x-admin-layout>
