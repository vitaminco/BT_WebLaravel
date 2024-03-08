<x-layout title="Đăng kí tài khoảng Admin">
    <div>
        @if (!empty(session('success_msg')))
            <div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('success_msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-md-10 mx-auto col-lg-5 ctr">
                    <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST">
                        @csrf
                        <x-app-input name="name" label="Họ và tên" />
                        <x-app-input name="email" type="email" label="Email" />
                        <x-app-input name="password" type="password" label="Mật khẩu" />
                        <x-app-input name="cf_password" type="password" label="Xác nhận mật khẩu" />

                        <label class="mt-3" for="">Role</label>
                        <select class="form-select" name="Role">
                            <option>-- Chọn một giá trị --</option>
                            <option value="2">Admin</option>
                            <option value="1">Client</option>
                        </select>

                        <div class="mt-3">
                            <button type="submit" class="btn btn-outline-warning">Đăng ký</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
