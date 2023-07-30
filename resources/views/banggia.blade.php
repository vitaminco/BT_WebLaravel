<x-admin-layout title="Bảng giá ưu đãi">
    <div class="industry-banner text-center page-banner"
        style="background-image: url(https://www.kiotviet.vn/wp-content/uploads/2021/12/thoitrang.jpg); background-size: cover; background-repeat: no-repeat; height: 395px;">
        <div class="container-wrap" style="padding: 154px;text-align: center; display: block">
            <h1 class="industry-heading mb-0" style="color: #fff;">Giang hàng giá</h1>
            <h1 class="industry-heading" style="color: #fff;"> Nơi có những ưu đãi cực đỉnh</h1>
        </div>
    </div>
    <div class="container my-5">
        @foreach ($data as $item)
            <div class="row p-4 pb-0 pe-lg-0 pt-lg-5 align-items-center rounded-3 border shadow-lg"
                style="background-color: #fff; margin: 10px 0">
                <div class="col-lg-7 p-3 p-lg-5 pt-lg-3 ctl">
                    <h1 class="display-4 fw-bold lh-1">Đối tượng {{ $item->doi_tuong }}</h1>
                    <p class="lead">Giá giảm: {{ number_format($item->gia_giam, 0, ',', '.') . ' ' . '' }}đ</p>
                    <p> Loại: {{ $item->loai_sp }}</p>
                    <p class="lead">Nội dung: {{ $item->mo_ta }}</p>
                </div>
                <div class="col-lg-4 offset-lg-1 p-0 overflow-hidden shadow-lg ctr">
                    <img class="rounded-lg-3" src="{{ $item->anh_cover }}" alt="" width="720">
                </div>
            </div>
        @endforeach
    </div>
</x-admin-layout>
