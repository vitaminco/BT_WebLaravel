<x-admin-layout title="Thêm mới bảng giá">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4">Thêm danh bảng giá</h2>
            </div>
            <div class="col-md-6 offset-md-3">
                @include('includes/errors')
                <form action="{{ route('admin.banggia.upsert') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-app-input name="doi_tuong" label="Đối tượng" />
                    <x-app-input name="gia_giam" label="Giá giảm" />
                    <x-app-input name="loai_sp" label="Loại SP" />
                    <x-app-input type="file" name="anh_cover" label="Hình ảnh logo" />
                    <x-app-input name="mo_ta" label="Mô tả" />
                    <x-app-input name="ghi_chu" label="Ghi chú" />
                    <div class="mt-3">
                        <input type="submit" class="btn btn-success" value="Thêm mới bảng giá" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
