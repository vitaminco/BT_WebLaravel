<x-admin-layout title="Thêm đóng góp">
    <div class="my-3 p-3 bg-body rounded shadow-sm">
        @foreach ($data1 as $item)
            <div class="d-flex text-muted pt-3" style="justify-content: space-between;">
                <div class="d-flex">
                    <img src="{{ $item->users->avatar ?? '' }}" width=30 height="30"
                        style="object-fit: cover;border-radius:50%; margin: 5px " />
                    <p class="pb-3 mb-0 small lh-sm border-bottom">
                        <strong class="d-block text-gray-dark">@ {{ $item->users->name ?? '' }}</strong>Nội dung:
                        {{ $item->mo_ta }}
                    </p>
                </div>
                <form class="d-inline" action="{{ route('admin.donggop.destroy', ['id' => $item->id]) }}" method="POST"
                    style="">
                    @csrf
                    <button type="submit" class="btn"><i class="bi bi-trash"></i></button>
                </form>
            </div>
        @endforeach
    </div>
    <div
        style="background-image: url(https://img5.thuthuatphanmem.vn/uploads/2022/01/11/anh-mau-trang-don-gian_050632247.jpg)">
        <div class="container">
            <div class="row" style="background-color: rgba(147, 145, 145, 0.496)">
                <div class="col-12">
                    <h2 class="mt-4">Góp ý nào!!!</h2>
                    <a href="{{ route('chitiet', ['id' => $data->id]) }}"><i class="bi bi-arrow-left-circle"></i> Về
                        trang chi tiết</a>
                </div>
                <div class="col-md-6 offset-md-3">
                    @include('includes/errors')
                    <form action="{{ route('admin.donggop.upsert', ['id' => $data->id]) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        <x-app-input name="mo_ta" label="Góp ý" />
                        <div style="display: none;">
                            <x-app-select model="SanPham" name="id_san_phams" label="Sản phẩm"
                                displayMember="ten_san_pham" valueMember="id" selected="{{ $data->id }}" />
                            <x-app-select model="User" name="id_users" label="User" displayMember="name"
                                valueMember="id" selected="{{ Auth::user()->id }}" />
                        </div>
                        <div class="mt-3" style="float:right">
                            <input type="submit" class="btn btn-success" value="Góp ý" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
