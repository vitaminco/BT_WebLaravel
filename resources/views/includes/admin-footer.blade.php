<div class="footer" style="background-color:#fff3f1">
    <div class="container px-4" id="featured-3" style="padding-top: 3rem;">
        <h2 class="pb-2 border-bottom d-flex">
            @foreach ($datanb as $item)
                @if ($item->logo != '')
                    <img src="{{ $item->logo }}" alt="" width="100" height="100">
                    <span class="d-flex"
                        style="flex-direction: column;justify-content: center;margin: 0 7px;">{{ $item->ten_cong_ty }}</span>
                @endif
            @endforeach
        </h2>
        <div class="row g-4 row-cols-1 row-cols-lg-3" style="padding-top: 3rem;">
            <div class="feature col">
                <h2>DOANH NGHIỆP</h2>
                <div
                    class="feature-icon bg-warning bg-gradient border border-white"style="border-radius:20px 0px 50px 20px">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#collection" />
                    </svg>
                </div>
                <ul class="footer_list">
                    <li>
                        <a href="/" class="icon-link">
                            Về ...
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#" class="icon-link">
                            Khách hàng
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon-link">
                            Điều khoảng sử dụng
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon-link">
                            Chính sách bảo mật
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon-link">
                            Liên hệ
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </li> --}}
                    <li style="list-style: none;">
                        Email:
                        @foreach ($datanb as $item)
                            <span>{{ $item->email }}</span>
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="feature
                        col">
                <h2>HỔ TRỢ</h2>
                <div class="feature-icon bg-warning bg-gradient border border-white"
                    style="border-radius:50px 50px 0px 0px">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#people-circle" />
                    </svg>
                </div>
                <ul class="footer_list">
                    <li>
                        <a href="{{ route('help') }}" class="navbar-brand">
                            Câu hỏi thường gặp
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#" class="icon-link">
                            Hướng dẫn sử dụng
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon-link">
                            Thông tin cập nhật
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </li> --}}
                    <li style="list-style: none;">
                        <h4 style="color: #f1d132;">Chăm sóc khách hàng</h4>
                        Hotline:
                        @foreach ($datanb as $item)
                            <span> {{ $item->so_dt_tu_van }}</span>
                        @endforeach
                    </li>
                </ul>
            </div>
            <div class="feature col">
                <h2>NGÀNH HÀNG</h2>
                <div class="feature-icon bg-warning bg-gradient border border-white"
                    style="border-radius:0px 20px 20px 50px">
                    <svg class="bi" width="1em" height="1em">
                        <use xlink:href="#toggles2" />
                    </svg>
                </div>
                <ul class="footer_list">
                    <li>
                        <a href="{{ route('sanpham') }}" class="navbar-brand">
                            Vé & Giá
                        </a>
                    </li>
                    {{-- <li>
                        <a href="#" class="icon-link">
                            Rạp
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon-link">
                            Thức ăn
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon-link">
                            Sân khấu
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon-link">
                            Kháng phòng
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon-link">
                            Phòng họp
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="icon-link">
                            Nhà nghỉ & Khách sạn
                            <svg class="bi" width="1em" height="1em">
                                <use xlink:href="#chevron-right" />
                            </svg>
                        </a>
                    </li> --}}
                    <li style="list-style: none;">
                        Địa chỉ:
                        @foreach ($datanb as $item)
                            <span>{{ $item->dia_chi }}</span>
                        @endforeach
                    </li>
                </ul>
            </div>
        </div>
    </div>
    {{--  --}}
    <div class="box-social" style="background-color: rgb(94, 99, 99); padding: 10px">
        <div class="container">
            <div class="row" style="padding: 18px 0 0 0">
                <div class="col-8">
                    @foreach ($datanb as $item)
                        <p class="mb-0 p-0" style="color: #fff; font-weight: 500">
                            <span>2023 {{ $item->ten_cong_ty }}™</span> © Copyright 2023 - 2024 {{ $item->ten_cong_ty }}
                            Corporation. All
                            Right
                            Reserved
                        </p>
                    @endforeach
                </div>
                <div class="col-4">
                    <ul class="social" style="list-style: none;">
                        <li><a rel="nofollow" title="Facebook"
                                href="https://www.facebook.com/profile.php?id=100024003636060" target="_blank"><i
                                    class="bi bi-facebook"></i></a>
                        </li>
                        <li><a rel="nofollow" title="Twitter" href="" target="_blank"><i
                                    class="bi bi-twitter"></i></a>
                        </li>
                        <li><a rel="nofollow noopener noreferrer" title="Youtube" href="" target="_blank"><i
                                    class="bi bi-youtube"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
