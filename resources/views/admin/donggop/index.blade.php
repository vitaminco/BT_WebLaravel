<x-admin-layout title="Góp ý">
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
                            <a href="{{ route('admin.donggop.index') }}" class="nav-link">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2" />
                                </svg>
                                <i class="bi bi-chat-square-heart"></i>
                                Trang đóng góp
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
                            <a href="{{ route('admin.banggia.index') }}" class="nav-link link-dark">
                                <svg class="bi me-2" width="16" height="16">
                                    <use xlink:href="#speedometer2" />
                                </svg>
                                <i class="bi bi-table"></i>
                                Trang ưu đãi
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
                <h2>Danh sách danh mục sản phẩm</h2>
                <table class="table" border="5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Mô tả</th>
                            <th>id user</th>
                            <th>id sản phẩm</th>
                            <th>tên sản phẩm</th>
                            <th></th>
                        </tr>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>
                                    {{ $item->users->name ?? '' }}
                                </td>
                                <td>{{ $item->mo_ta }}</td>
                                <td>{{ $item->id_users }}</td>
                                <td>{{ $item->id_san_phams }}</td>
                                <td>{{ $item->san_phams->ten_san_pham ?? '' }}</td>
                                <td>
                                    <form class="d-inline"
                                        action="{{ route('admin.donggop.destroy', ['id' => $item->id]) }}"
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

                {{-- giao diện phan trang --}}
                {{ $data->links() }}
            </div>
        </div>
    </div>
</x-admin-layout>
