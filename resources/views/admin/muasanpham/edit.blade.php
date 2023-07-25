<x-admin-layout title="Sửa sản phẩm mua">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4">Sửa sản phẩm mua</h2>
            </div>
            <div class="col-md-6 offset-md-3">
                @include('includes/errors')
                <form action="{{ route('admin.muasanpham.upsert', ['id' => $data->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <x-app-input name="ten" label="Tên" value="{{ $data->ten }}" />
                    <x-app-input name="dia_chi" label="Địa Chỉ" value="{{ $data->dia_chi }}" />
                    <x-app-input name="so_dt" label="Số điện thoại" type="number" value="{{ $data->so_dt }}" />
                    <div style="display: none">
                        <x-app-select model="SanPham" name="id_san_pham" label="Sản Phẩm" displayMember="ten_san_pham"
                            valueMember="id" selected="{{ $data->id_san_pham }}" />
                    </div>
                    <br>
                    <p>Tên sản phẩm: {{ $data->san_phams->ten_san_pham ?? '' }}</p>
                    <x-app-input label="Số lượng" min="1" name="so_luong" value="{{ $data->so_luong }}" />
                    <div class="mt-3">
                        <input type="submit" class="btn btn-success" value="Sửa sản phẩm" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
