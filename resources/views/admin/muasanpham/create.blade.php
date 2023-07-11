<x-admin-layout title="Thêm mới sản phẩm">
    <div class="row">
        <div class="col-12">
            <h2 class="mt-4">Thêm sản phẩm mới</h2>
        </div>
        <div class="col-md-6 offset-md-3">
            @include('includes/errors')
            <form action="{{ route('admin.muasanpham.upsert') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-app-input name="name" label="Tên" />
                <x-app-input name="dia_chi" label="Địa Chỉ" />
                <x-app-input name="so_dt" label="Số điện thoại" type="number" />
                <x-app-select model="SanPham" name="id_san_pham" label="Sản Phẩm" displayMember="ten_san_pham"
                    valueMember="id" />
                <x-app-input name="gia" label="Gía" type="number" />
                <x-app-input name="mo_ta" label="Mô tả" />
                {{-- <x-app-input name="gia" label="Gía" type="number" value="{{ $data->san_phams->gia }}" />
                <x-app-input name="mo_ta" label="Mô tả" value="{{ $data->san_phams->mo_ta }}" /> --}}
                <div class="mt-3">
                    <input type="submit" class="btn btn-success" value="Mua sản phẩm" />
                </div>
            </form>
        </div>
    </div>
</x-admin-layout>
