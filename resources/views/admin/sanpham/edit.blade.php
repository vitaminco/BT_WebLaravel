<x-admin-layout title="Sửa sản phẩm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4">Sửa sản phẩm</h2>
            </div>
            <div class="col-md-6 offset-md-3">
                @include('includes/errors')
                <form action="{{ route('admin.sanpham.upsert', ['id' => $data->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <x-app-input name="ten_san_pham" label="Tên sản phẩm" value="{{ $data->ten_san_pham }}" />
                    <x-app-input name="gia" label="Gía" type="number" value="{{ $data->gia }}" />
                    <x-app-input name="mo_ta" label="Mô tả" value="{{ $data->mo_ta }}" />
                    <x-app-input type="file" name="anh_cover" label="Hình ảnh" value="{{ $data->anh_cover }}" />
                    <x-app-input name="so_luong_ton" label="Số lượng tồn" value="{{ $data->so_luong_ton }}" />
                    <x-app-select model="Danhmuc" name="id_danh_muc" label="Danh mục" displayMember="ten_danh_muc"
                        valueMember="id" selected="{{ $data->id_danh_muc }}" />
                    <div class="mt-3">
                        <input type="submit" class="btn btn-success" value="Sửa sản phẩm" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
