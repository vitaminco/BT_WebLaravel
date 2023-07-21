<x-admin-layout title="Tin tức">
    <div class="container">
        <div class="row">
            {{--  --}}
            <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a href="{{ route('index_Admin') }}" class="nav-link link-dark">
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
                            <a href="{{ route('admin.tintuc.index') }}" class="nav-link">
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
            <div class="col-md-9 ms-sm-auto col-lg-10 px-md-4 table-responsive">
                <h2>Danh sách tin tức</h2>
                <table class="table" border="5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên tin tức</th>
                            <th>Giam giá</th>
                            <th>Mô tả</th>
                            <th>Hình ảnh</th>
                            <th><a class="btn btn-primary" aria-current="page"
                                    href="{{ route('admin.tintuc.create') }}">
                                    <i class="bi bi-plus-circle-dotted"></i> Thêm Tin
                                </a></th>
                        </tr>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->ten_tin_tuc }}</td>
                                <td>{{ number_format($item->giam_gia) }}</td>
                                <td>{{ $item->mo_ta }}</td>
                                <td>
                                    <img src="{{ $item->anh_cover }}" width=100 />
                                </td>
                                <td>
                                    <a href="{{ route('admin.tintuc.edit', ['id' => $item->id]) }}"
                                        class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <form class="d-inline"
                                        action="{{ route('admin.tintuc.destroy', ['id' => $item->id]) }}"
                                        method="POST">
                                        @csrf
                                        <button type="submit" class="btn btn-danger"><i
                                                class="bi bi-trash3"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                    </thead>
                </table>
                {{ $data->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
