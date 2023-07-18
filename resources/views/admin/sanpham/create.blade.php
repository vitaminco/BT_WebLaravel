<x-admin-layout title="Thêm mới sản phẩm">
    <div class="row">
        <div class="col-12">
            <h2 class="mt-4">Thêm sản phẩm mới</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            @include('includes/errors')
            <form action="{{ route('admin.sanpham.upsert') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-app-input name="ten_san_pham" label="Tên sản phẩm" />
                <x-app-input name="gia" label="Gía" type="number" />
                <x-app-input name="mo_ta" label="Mô tả" />
                <x-app-input type="file" name="anh_cover" label="Hình ảnh" />
                <x-app-input name="so_luong_ton" label="Số lượng tồn" />
                <x-app-select model="Danhmuc" name="id_danh_muc" label="Danh mục" displayMember="ten_danh_muc"
                    valueMember="id" />
                <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="Thêm mới sản phẩm" />
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
