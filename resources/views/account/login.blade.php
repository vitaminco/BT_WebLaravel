<x-admin-layout title="ĐĂNG NHẬP">

    <div>
        <div class="container">
            @if (!empty(session('success_msg')))
                <div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert">
                    {{ session('success_msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if (!empty(session('error_msg')))
                <div class="mt-2 alert alert-danger alert-dismissible fade show" role="alert">
                    {{ session('error_msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
        </div>
        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <h1 class="ctr">ĐĂNG NHẬP TÀI KHOẢN NGAY</h1>
                <div class="col-md-10 mx-auto ctl">
                    <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST">
                        <p class="text-center">Vui lòng nhập Email và mật khẩu để đăng nhập.</p>
                        @csrf
                        <x-app-input name="email" type="email" label="Email" />
                        <x-app-input name="password" type="password" label="Mật khẩu" />

                        <div class="mt-3">
                            <button type="submit" class="btn btn-outline-warning">Đăng Nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
