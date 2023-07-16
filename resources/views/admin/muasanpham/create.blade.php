<x-admin-layout title="Mua sản phẩm">
    <div
        style="background-image: url(https://img5.thuthuatphanmem.vn/uploads/2022/01/11/anh-mau-trang-don-gian_050632247.jpg)">
        <div class="container">
            <div class="row" style="background-color: rgba(147, 145, 145, 0.496)">
                <div class="col-12">
                    <h2 class="mt-4">Mua sản phẩm nào!!</h2>
                </div>
                <div class="col-md-6 offset-md-3">
                    @include('includes/errors')
                    <form action="{{ route('admin.muasanpham.upsert', ['id' => $data->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <x-app-input name="name" label="Tên" />
                        <x-app-input name="dia_chi" label="Địa chỉ" />
                        <x-app-input name="so_dt" label="Số điện thoại" type="number" />
                        <img src="{{ $data->anh_cover }}" width=100% height="250px"
                            style="object-fit: cover;border-radius: 2px; margin: 10px 0" />
                        <x-app-select model="SanPham" name="id_san_pham" label="Tên sản phẩm"
                            displayMember="ten_san_pham" valueMember="id" selected="{{ $data->id }}" /> <br>
                        <p>Giá: {{ $data->gia }}</p>
                        <p>Mô tả: {{ $data->mo_ta }}</p>

                        <x-app-input label="Số lượng" min="1" name="" type="number" value="1" />
                        <div class="mt-3">
                            <input type="submit" class="btn btn-success" value="Mua sản phẩm" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
