<x-admin-layout title="Mua hàng">
    {{-- banner --}}
    <div class="industry-banner text-center page-banner bg-danger">
        <div class="container-wrap page-banner-content">
            <h1 class="industry-heading mb-0 text-white">Giỏ hàng thân yêu</h1>
            <h1 class="industry-heading text-white">Nơi chứa đựng những chiếc vé chất lượng</h1>
        </div>
    </div>
    <div class="container">
        <div class="list-group list-group-flush border-bottom scrollarea mt-3">
            @foreach ($data as $item)
                @if ($item->id_users == Auth::user()->id)
                    <a href="{{ route('chitietdon', ['id' => $item->id]) }}"
                        class="list-group-item list-group-item-action py-3 lh-tight d-flex justify-content-between shadow-lg rounded-1">
                        <div class="d-flex card-list">
                            <img src="{{ $item->san_phams->anh_cover ?? '' }}" width=100 />
                            <div>
                                <div class="w-100 align-items-center justify-content-between">
                                    <strong class="mb-1">Tên sản phẩm:
                                        {{ $item->san_phams->ten_san_pham ?? '' }}</strong>
                                    <small class="text-muted">Giá:
                                        {{ number_format($item->san_phams->gia ?? '', 0, ',', '.') . ' ' . '' }}đ</small>
                                </div>
                                <div class="col-10 mb-1 small card-content">
                                    Mô tả: {{ $item->san_phams->mo_ta ?? '' }}
                                </div>
                            </div>
                        </div>
                        <div>{{ $item->created_at->format('D/M/Y') }}</div>
                    </a>
                @else
                    <h1>Bạn chưa có vé nào. Mua ngay thôi!!</h1>
                @break;
            @endif
        @endforeach
        {{-- giao diện phan trang --}}
        {{ $data->links() }}
    </div>
</div>
</x-admin-layout>
