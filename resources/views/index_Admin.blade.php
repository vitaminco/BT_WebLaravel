<x-admin-layout title="Home">
    <div class="container">
        <div class="row">
            {{--  --}}
            <nav class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('index_Admin') }}" class="nav-link">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2" />
                                </svg>
                                <i class="bi bi-house"></i>
                                Home
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.danhmuc.index') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2" />
                                </svg>
                                <i class="bi bi-list-columns-reverse"></i>
                                Trang danh sách
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.sanpham.index') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#table" />
                                </svg>
                                <i class="bi bi-film"></i>
                                Trang sản phẩm
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.tintuc.index') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2" />
                                </svg>
                                <i class="bi bi-journal-text"></i>
                                Trang Tin Tức
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.admin.index') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2" />
                                </svg>
                                <i class="bi bi-person"></i>
                                Trang users
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.donggop.index') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2" />
                                </svg>
                                <i class="bi bi-chat-square-heart"></i>
                                Trang đóng góp
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.banggia.index') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2" />
                                </svg>
                                <i class="bi bi-table"></i>
                                Trang ưu đãi
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.help.index') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2" />
                                </svg>
                                <i class="bi bi-patch-question"></i>
                                Trang trợ giúp
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('admin.cauhinh.index') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2" />
                                </svg>
                                <i class="bi bi-gear"></i>
                                Trang cấu hình
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <h2>Bảng thống kê đơn mua</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng mua</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Còn tồn</th>
                                <th>Số lượng khách mua: {{ $datac }} SP</th>
                                @foreach ($datagt as $item)
                                    <th>Tổng giá trị: {{ number_format($item->gia, 0, ',', '.') . ' ' . '' }}đ</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->san_phams->ten_san_pham ?? '' }}</td>
                                    <td>{{ $item->so_luong }}</td>
                                    <td>{{ number_format($item->gia, 0, ',', '.') . ' ' . '' }}đ
                                    <td>{{ $item->san_phams->so_luong_ton ?? '' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
</x-admin-layout>
