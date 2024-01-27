<x-admin-layout title="Tin tức">
    {{-- banner --}}
    <div class="industry-banner text-center page-banner bg-danger">
        <div class="container-wrap page-banner-content">
            <h1 class="industry-heading mb-0 text-white">Nơi bắt đầu của những ưu đãi</h1>
            <h1 class="industry-heading text-white">Những tin tức hấp dẫn</h1>
        </div>
    </div>
    {{--  --}}
    <div class="container mt-3">
        <div class="row row-cols-3 news">
            @foreach ($data as $item)
                <a href="{{ route('chitiettin', ['id' => $item->id]) }}" class="col" data-aos="flip-down">
                    <title>{{ $item->ten_tin_tuc }}</title>
                    <img src="{{ $item->anh_cover }}" width=100% height="250px" style="object-fit: cover; " />
                    <div class="mt-3 mx-1">
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
