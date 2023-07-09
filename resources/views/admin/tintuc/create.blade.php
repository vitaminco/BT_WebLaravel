<x-admin-layout title="Thêm mới tin tức">
    <div class="row">
        <div class="col-12">
            <h2 class="mt-4">Thêm tin tức mới</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            @include('includes/errors')
            <form action="{{ route('admin.tintuc.upsert') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-app-input name="ten_tin_tuc" label="Tên tin tức" />
                <x-app-input name="giam_gia" label="Giam giá" type="number" />
                <x-app-input name="mo_ta" label="Mô tả" />
                <x-app-input type="file" name="anh_cover" label="Hình ảnh" />

                <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="Thêm mới tin tức" />
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
