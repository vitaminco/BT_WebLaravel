<x-admin-layout title="Đăng kí">
    <div>
        @if (!empty(session('success_msg')))
            <div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('success_msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start ctl">
                    @foreach ($data as $item)
                        <h1 class="display-4 fw-bold lh-1 mb-3 text-center">WELLCOME TO...{{ $item->ten_cong_ty }}</h1>
                    @endforeach
                    <p class="fs-4">Đăng kí ngay để có thể mua những sản phẩm và nhận được những ưu đãi tốt
                        nhất từ chúng tôi.</p>
                    @foreach ($data as $item)
                        <div class="register">
                            @if ($item->logo != '')
                                <img src="{{ $item->logo }}"
                                    style="object-fit: fill;width: 100%;height: 301px;border-radius: 20px;" />
                            @else
                                ""
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="col-md-10 mx-auto col-lg-5 ctr">
                    <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST">
                        @csrf
                        <x-app-input name="name" label="Họ và tên" />
                        <x-app-input name="email" type="email" label="Email" />
                        <x-app-input name="password" type="password" label="Mật khẩu" />
                        <x-app-input name="cf_password" type="password" label="Xác nhận mật khẩu" />

                        <div class="mt-3">
                            <button type="submit" class="btn btn-outline-warning">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
