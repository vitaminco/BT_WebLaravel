<x-admin-layout title="Thêm mới sản phẩm">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4">Thêm sản phẩm mới</h2>
            </div>
            <div class="col-md-6 offset-md-3">
                @include('includes/errors')
                <form action="{{ route('admin.sanpham.upsert') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-app-input name="ten_san_pham" label="Tên sản phẩm" />
                    <x-app-input name="gia" label="Gía" type="text" />
                    {{-- <x-app-input name="mo_ta" label="Mô tả" /> --}}

                    <textarea id="summernote" name="mo_ta"></textarea>

                    <x-app-input type="file" name="anh_cover" label="Hình ảnh" />

                    {{-- <input type="file" name="sp_img[]" label="Anh chi tiết" multiple /> --}}

                    <div class="buttons_added mt-3">
                        <input class="minus is-form" type="button" value="-">
                        <input label="Số lượng tồn" class="input-qty" max="1000" min="1" name="so_luong_ton"
                            type="number" value="0">
                        <input class="plus is-form" type="button" value="+">
                    </div>
                    <x-app-select model="Danhmuc" name="id_danh_muc" label="Danh mục" displayMember="ten_danh_muc"
                        valueMember="id" />
                    <div class="mt-3">
                        <input type="submit" class="btn btn-success" value="Thêm mới sản phẩm" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
