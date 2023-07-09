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
            <div class="row">
                <div class="col-md-6">
                    <h1>TRANG ĐĂNG NHẬP TÀI KHOẢN</h1>
                    <form action="" method="post">
                        @csrf
                        <x-app-input name="email" type="email" label="Email" />
                        <x-app-input name="password" type="password" label="Mật khẩu" />

                        <div class="mt-3">
                            <button type="submit" class="btn btn-outline-success">Đăng Nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
