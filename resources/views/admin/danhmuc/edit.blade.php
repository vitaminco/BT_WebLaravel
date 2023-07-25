<x-admin-layout title="Sửa sản phẩm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4">Sửa danh mục</h2>
            </div>
            <div class="col-md-6 offset-md-3">
                @include('includes/errors')
                <form action="{{ route('admin.danhmuc.upsert', ['id' => $data->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <x-app-input name="ten_danh_muc" label="Tên danh mục" value="{{ $data->ten_danh_muc }}" />
                    <x-app-input type="file" name="anh_cover" label="Hình ảnh" value="{{ $data->anh_cover }}" />

                    <div class="mt-3">
                        <input type="submit" class="btn btn-success" value="Sửa danh mục" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
