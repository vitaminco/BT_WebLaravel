<div class="col-6 col-md-4">
    <title>{{ $data->ten_san_pham }}</title>
    <img src="{{ $data->anh_cover }}" width=100% />
    <div style="display: flex; justify-content: space-between; padding: 10px">
        <h4>{{ $data->ten_san_pham }}</h4>
        <p>Giá: {{ number_format($data->gia) }}</p>
    </div>
</div>
