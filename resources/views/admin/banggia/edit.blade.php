<x-admin-layout title="Sửa bảng giá">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4">Sửa bảng giá</h2>
            </div>
            <div class="col-md-6 offset-md-3">
                @include('includes/errors')
                <form action="{{ route('admin.banggia.upsert', ['id' => $data->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <x-app-input name="doi_tuong" label="Đối tượng" value="{{ $data->doi_tuong }}" />
                    <x-app-input name="gia_giam" label="Giá giảm" value="{{ $data->gia_giam }}" />
                    <x-app-input name="loai_sp" label="Loại SP" value="{{ $data->loai_sp }}" />
                    <x-app-input type="file" name="anh_cover" label="Hình ảnh logo" value="{{ $data->anh_cover }}" />
                    <x-app-input name="mo_ta" label="Mô tả" value="{{ $data->mo_ta }}" />
                    <x-app-input name="ghi_chu" label="Ghi chú" value="{{ $data->ghi_chu }}" />
                    <div class="mt-3">
                        <input type="submit" class="btn btn-success" value="Sửa bảng giá" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
