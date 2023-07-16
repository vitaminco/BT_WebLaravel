<x-admin-layout title="Chi tiết sản phẩm">
    {{-- banner --}}
    <div class="industry-banner text-center page-banner"
        style="background-image: url(https://www.kiotviet.vn/wp-content/uploads/2021/12/kiotviet.jpg); background-size: cover; background-repeat: no-repeat; height: 395px;">
        <div class="container-wrap" style="padding: 154px;text-align: center; display: block">
            <h1 class="industry-heading mb-0" style="color: #fff;">Giang hàng sản phẩm</h1>
            <h1 class="industry-heading" style="color: #fff;"> Thông tin mặt hàng</h1>
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
                    <div
                        style="display: flex; justify-content: space-between; padding: 10px; font-weight: 700; font-size: 1.2rem">
                        <p>{{ $data->ten_san_pham }}</p> <br>
                        <p>Giá: {{ number_format($data->gia) }}</p> <br>
                    </div>
                    <p>Mô tả: {{ $data->mo_ta }}</p>
                    <div class="mt-3" style="text-align: center;">
                        <button class="btn btn-outline-success"><a style="color: #f1d132"
                                href="{{ route('admin.muasanpham.create', ['id' => $data->id]) }}">MUA
                                NGAY</a></button>
                    </div>
                </div>
            </div>
        </div>
        {{-- phần bình luận --}}
        <div class="d-flex align-items-center p-3 my-3  bg-purple rounded shadow-sm">
            <h1 class=" mb-0 lh-1">Phản hồi</h1>
        </div>

        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <h6 class="border-bottom pb-2 mb-0">Recent comments</h6>
            <div class="d-flex text-muted pt-3">
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32"
                    xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32"
                    preserveAspectRatio="xMidYMid slice" focusable="false">
                    <title>Placeholder</title>
                    <rect width="100%" height="100%" fill="#6f42c1" /><text x="50%" y="50%"
                        fill="#6f42c1" dy=".3em">32x32</text>
                </svg>

                <p class="pb-3 mb-0 small lh-sm border-bottom">
                    <strong class="d-block text-gray-dark">@username</strong>
                    This user also gets some representative placeholder content. Maybe they did something interesting,
                    and you really want to highlight this in the recent updates.
                </p>
            </div>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Comment" aria-label="Search">
                <button class="btn btn-outline-success" type="submit"><i class="bi bi-send"></i></button>
            </form>
        </div>
    </div>
</x-admin-layout>
