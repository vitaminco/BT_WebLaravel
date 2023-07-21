<x-admin-layout title="Sửa cấu hình">
    <div class="row">
        <div class="col-12">
            <h2 class="mt-4">Sửa cấu hình</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            @include('includes/errors')
            <form action="{{ route('admin.cauhinh.upsert', ['id' => $data->id]) }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <x-app-input name="ten_cong_ty" label="Tên công ty" value="{{ $data->ten_cong_ty }}" />
                <x-app-input name="so_dt_tu_van" label="Số điện thoại" value="{{ $data->so_dt_tu_van }}" />
                <x-app-input name="email" label="Email" value="{{ $data->email }}" />
                <x-app-input name="dia_chi" label="Địa chỉ" value="{{ $data->dia_chi }}" />
                <x-app-input type="file" name="logo" label="Hình ảnh logo" value="{{ $data->logo }}" />
                <x-app-input name="ghi_chu" label="Ghi chú" value="{{ $data->ghi_chu }}" />
                <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="Sửa cấu hình" />
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
