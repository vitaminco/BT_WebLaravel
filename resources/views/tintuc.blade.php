<x-admin-layout title="Tin tức">
    {{-- banner --}}
    <div class="industry-banner text-center page-banner"
        style="background-image: url(https://www.kiotviet.vn/wp-content/uploads/2021/12/kiotviet.jpg); background-size: cover; background-repeat: no-repeat; height: 395px;">
        <div class="container-wrap" style="padding: 154px;text-align: center; display: block">
            <h1 class="industry-heading mb-0" style="color: #fff;">Nơi bắt đầu của những ưu đãi</h1>
            <h1 class="industry-heading" style="color: #fff;">Những tin tức hấp dẫn</h1>
        </div>
    </div>
    {{--  --}}
    <div class="container" style="margin: 10px auto">
        <div class="row row-cols-3"style="background-color: cornsilk;border-radius: 3px">
            @foreach ($data as $item)
                <a href="{{ route('chitiettin', ['id' => $item->id]) }}" class="col tintuc"
                    style="padding: 10px;width: 33%;">
                    <title>{{ $item->ten_tin_tuc }}</title>
                    <img src="{{ $item->anh_cover }}" width=100% height="250px" style="object-fit: cover; " />
                    <div style="padding: 10px 10px 0 10px">
                        <h4>{{ $item->ten_tin_tuc }}</h4>
                        <p>{{ $item->mo_ta }}</p>
                    </div>
                </a>
            @endforeach
            {{-- giao diện phan trang --}}
            {{ $data->links() }}
        </div>
    </div>
</x-admin-layout>
