<x-admin-layout title="Thêm mới trợ giúp">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4">Thêm trợ giúp mới</h2>
            </div>
            <div class="col-md-6 offset-md-3">
                @include('includes/errors')
                <form action="{{ route('admin.help.upsert', ['id' => $data->id]) }}" method="POST"
                    enctype="multipart/form-data">
                    @csrf
                    <x-app-input name="cau_hoi" label="Câu hỏi" value="{{ $data->cau_hoi }}" />
                    <x-app-input name="tra_loi" label="Trả lời" value="{{ $data->tra_loi }}" />
                    <x-app-input type="file" name="anh_help" label="Hình ảnh" value="{{ $data->anh_help }}" />
                    <x-app-input name="ghi_chu" label="Ghi chú" value="{{ $data->ghi_chu }}" />

                    <div class="mt-3">
                        <input type="submit" class="btn btn-success" value="Sửa" />
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-admin-layout>
