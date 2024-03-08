<x-admin-layout title="Mua sản phẩm">
    <div
        style="background-image: url(https://img5.thuthuatphanmem.vn/uploads/2022/01/11/anh-mau-trang-don-gian_050632247.jpg)">
        <div class="container">
            <main>
                <div class="py-5 text-center">
                    <span><i class="bi bi-ticket-perforated" style="font-size: 100px"></i></span>
                    <h2>Checkout tickets</h2>
                </div>

                <div class="row g-5">
                    <div class="col-md-5 col-lg-4 order-md-last">
                        <h4 class="justify-content-between align-items-center mb-3">
                            <span class="text-primary">Your cart</span>
                        </h4>
                        <ul class="list-group mb-3">
                            <li class="list-group-item lh-sm">
                                <div>
                                    <div class="d-flex justify-content-between">
                                        <h6 class="my-0">
                                            <p>Tên sản phẩm: {{ $data->ten_san_pham }}</p>
                                        </h6>
                                        <span class="text-muted">
                                            <p>Giá: {{ number_format($data->gia, 0, ',', '.') . ' ' . '' }}đ/1SP</p>
                                        </span>
                                    </div>
                                    <div class="mb-3">
                                        <img src="{{ $data->anh_cover }}" width=100% height="250px"
                                            style="object-fit: cover;border-radius: 2px; margin: 10px 0" />
                                        <small class="text-muted">
                                            <p>Mô tả: {{ $data->mo_ta }}</p>
                                        </small>
                                    </div>
                                </div>

                            </li>

                            <li class="list-group-item d-flex justify-content-between bg-light">
                                <div class="text-success">
                                    <h6 class="my-0">Promo code</h6>
                                    <small>EXAMPLECODE</small>
                                </div>
                                <span class="text-success">-0đ</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <span>Total (VND)</span>
                                <strong>{{ number_format($data->gia, 0, ',', '.') . ' ' . '' }}đ/1SP</p></strong>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-7 col-lg-8">
                        @include('includes/errors')
                        <form action="{{ route('clients.muasanpham.upsert', ['id' => $data->id]) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <x-app-input name="ten" label="Tên/Nickname" />
                            <x-app-input name="dia_chi" label="Địa chỉ" />
                            <x-app-input name="so_dt" label="Số điện thoại(+84)" type="text" />

                            <div style="display: none">
                                <x-app-select model="SanPham" name="id_san_pham" label="Tên sản phẩm"
                                    displayMember="ten_san_pham" valueMember="id" selected="{{ $data->id }}" />
                                <x-app-select model="User" name="id_users" label="User" displayMember="name"
                                    valueMember="id" selected="{{ Auth::user()->id }}" />
                                <x-app-input label="Gía" name="gia" value="{{ $data->gia }}" />
                            </div>

                            <div class="buttons_added mt-3">
                                <input class="minus is-form" type="button" value="-">
                                <input label="Số lượng" class="input-qty" max="10" min="1" name="so_luong"
                                    type="number" value="1">
                                <input class="plus is-form" type="button" value="+">
                            </div>
                            {{--  --}}
                            <div class="modal fade" id="exampleModalToggle" aria-hidden="true"
                                aria-labelledby="exampleModalToggleLabel" tabindex="-1">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalToggleLabel">
                                                {{ $data->ten_san_pham }}</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Bạn đã chắc chắn mua vé này: {{ $data->ten_san_pham }} chưa!!!
                                        </div>
                                        <div class="modal-footer text-center">
                                            <div class="mt-3 text-center">
                                                <input type="submit" class="btn btn-warning" value="Mua ngay" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="mt-3 text-center">
                                <a class="btn btn-warning" data-bs-toggle="modal" href="#exampleModalToggle"
                                    role="button">Mua sản phẩm</a>
                            </div>
                        </form>
                    </div>
                </div>
            </main>
        </div>
    </div>
    {{--  --}}

</x-admin-layout>
