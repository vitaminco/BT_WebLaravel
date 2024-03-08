<x-admin-layout title="Sửa">
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
        <div class="row align-items-center g-lg-5 py-5">
            <div class="col-md-10 mx-auto">
                <h1>TRANG ADMIN SỬA TÀI KHOẢN</h1>
                <form class="p-4 p-md-5 border rounded-3 bg-light" method="POST"
                    action="{{ route('admin.admin.upsert', ['id' => $data->id]) }}" enctype="multipart/form-data">
                    @csrf
                    <x-app-input name="name" type="name" label="Name" value="{{ $data->name }}" />
                    <x-app-input name="email" type="email" label="Email" value="{{ $data->email }}" />
                    <x-app-input name="password" type="password" label="Mật khẩu" />
                    <x-app-input type="file" name="avatar" label="Hình ảnh" value="{{ $data->avatar }}" />

                    <div class="mt-3">
                        <button type="submit" class="btn btn-outline-success">Sửa</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
