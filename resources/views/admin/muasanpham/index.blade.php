<x-admin-layout title="Mua hàng">
    <div class="industry-banner text-center page-banner"
        style="background-image: url(https://www.kiotviet.vn/wp-content/uploads/2021/12/thoitrang.jpg); background-size: cover; background-repeat: no-repeat; height: 395px;">
        <div class="container-wrap" style="padding: 154px;text-align: center; display: block">
            <h1 class="industry-heading mb-0" style="color: #fff;">Giỏ hàng thân yêu</h1>
            <h1 class="industry-heading" style="color: #fff;"> Nơi chứa đựng những sản phẩm hữu ích</h1>
        </div>
    </div>
    <div class="container">
        <div class="list-group list-group-flush border-bottom scrollarea" style="margin: 10px">
            @foreach ($data as $item)
                @if ($item->id_users == Auth::user()->id)
                    <a href="{{ route('chitietdon', ['id' => $item->id]) }}"
                        class="list-group-item list-group-item-action py-3 lh-tight d-flex"
                        style="border: 2px solid #949393">
                        <div class="d-flex">
                            <img src="{{ $item->san_phams->anh_cover ?? '' }}" width=100
                                style="margin: 0 10px 0 0;object-fit: cover;" />
                            <div>
                                <div class="w-100 align-items-center justify-content-between">
                                    <strong class="mb-1">Tên sản phẩm:
                                        {{ $item->san_phams->ten_san_pham ?? '' }}</strong>
                                    <small class="text-muted">Giá: {{ $item->san_phams->gia ?? '' }}</small>
                                </div>
                                <div class="col-10 mb-1 small" style="max-height: 84px;overflow: hidden;">
                                    Mô tả: {{ $item->san_phams->mo_ta ?? '' }}
                                </div>
                            </div>
                        </div>
                        <div>{{ $item->created_at->format('D') }}</div>
                    </a>
                @else
                    <h1>Bạn chưa có sản phẩm!! Mua ngay nào</h1>
                @break;
            @endif
        @endforeach
        {{-- giao diện phan trang --}}
        {{ $data->links() }}
    </div>
</div>
</x-admin-layout>
