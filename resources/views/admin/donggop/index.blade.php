<x-admin-layout>
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
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.danhmuc.index') }}" class="nav-link link-dark">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#speedometer2" />
                            </svg>
                            Trang danh sách
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.sanpham.index') }}" class="nav-link link-dark">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#table" />
                            </svg>
                            Trang sản phẩm
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.tintuc.index') }}" class="nav-link link-dark">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#speedometer2" />
                            </svg>
                            Trang Tin Tức
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.admin.index') }}" class="nav-link link-dark">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#speedometer2" />
                            </svg>
                            Trang users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.donggop.index') }}" class="nav-link">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#speedometer2" />
                            </svg>
                            Trang đóng góp
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
                        <th><a class="btn btn-primary" aria-current="page" href="{{ route('admin.donggop.create') }}">
                                <i class="bi bi-plus-circle-dotted"></i> Thêm đóng góp
                            </a></th>
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
                            <td>
                                <form class="d-inline"
                                    action="{{ route('admin.donggop.destroy', ['id' => $item->id]) }}" method="POST">
                                    @csrf
                                    <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
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
</x-admin-layout>
