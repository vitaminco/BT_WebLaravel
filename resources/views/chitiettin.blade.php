<x-admin-layout title="Chi tiết sản phẩm">
    {{-- banner --}}
    <div class="industry-banner text-center page-banner bg-danger">
        <div class="container-wrap page-banner-content">
            <h1 class="industry-heading mb-0 text-white">Nơi bắt đầu của những ưu đãi</h1>
            <h1 class="industry-heading text-white">Thông tin tin tức</h1>
        </div>
    </div>
    {{--  --}}
    <div class="container">
        <div class="row" style="margin: 10px">
            <div class="col-8 ctl">
                <title>{{ $data->ten_tin_tuc }}</title>
                <img src="{{ $data->anh_cover }}" width=100% height="500px" style="object-fit: cover; " />
            </div>
            <div class="col-4 ctr">
                <div class="p-4 p-md-5 border rounded-3 bg-light">
                    <div class="news-list-content">
                        <p>{{ $data->ten_tin_tuc }}</p>
                        <p>Giảm giá: {{ number_format($data->giam_gia) }}%</p>
                    </div>
                    <div class="card card-body">
                        <p><b>Mô tả: </b>{{ $data->mo_ta }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
