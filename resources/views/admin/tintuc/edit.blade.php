<x-admin-layout title="Sửa tin tức">
    <div class="row">
        <div class="col-12">
            <h2 class="mt-4">Sửa tin tức</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            @include('includes/errors')
            <form action="{{ route('admin.tintuc.upsert', ['id' => $data->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <x-app-input name="ten_tin_tuc" label="Tên tin tức" value="{{ $data->ten_tin_tuc }}" />
                <x-app-input name="giam_gia" label="Giam giá" type="number" value="{{ $data->giam_gia }}" />
                <x-app-input name="mo_ta" label="Mô tả" value="{{ $data->mo_ta }}" />
                <x-app-input type="file" name="anh_cover" label="Hình ảnh" value="{{ $data->anh_cover }}" />

                <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="Sửa tin tức" />
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
