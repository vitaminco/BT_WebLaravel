<x-admin-layout title="Chi tiết sản phẩm">
    {{-- banner --}}
    <div class="industry-banner text-center page-banner"
        style="background-image: url(https://www.kiotviet.vn/wp-content/uploads/2021/12/kiotviet.jpg); background-size: cover; background-repeat: no-repeat; height: 395px;">
        <div class="container-wrap" style="padding: 154px;text-align: center; display: block">
            <h1 class="industry-heading mb-0" style="color: #fff;">Giang hàng sản phẩm</h1>
            <h1 class="industry-heading" style="color: #fff;"> Thông tin tin tức</h1>
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
                    <div style="padding: 10px; font-weight: 700; font-size: 1.2rem">
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
