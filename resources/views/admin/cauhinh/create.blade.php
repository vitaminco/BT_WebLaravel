<x-admin-layout title="Thêm mới cấu hình">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4">Thêm danh cấu hình</h2>
            </div>
            <div class="col-md-6 offset-md-3">
                @include('includes/errors')
                <form action="{{ route('admin.cauhinh.upsert') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-app-input name="ten_cong_ty" label="Tên công ty" />
                    <x-app-input name="so_dt_tu_van" label="Số điện thoại" />
                    <x-app-input name="email" label="Email" />
                    <x-app-input name="dia_chi" label="Địa chỉ" />
                    <x-app-input type="file" name="logo" label="Hình ảnh logo" />
                    <x-app-input name="ghi_chu" label="Ghi chú" />
                    <div class="mt-3">
                        <input type="submit" class="btn btn-success" value="Thêm mới cấu hình" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
