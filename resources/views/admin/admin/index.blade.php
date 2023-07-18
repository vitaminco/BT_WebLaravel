<x-admin-layout title="HNH">
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
                        <a href="{{ route('admin.admin.index') }}" class="nav-link">
                            <svg class="bi me-2" width="16" height="16">
                                <use xlink:href="#speedometer2" />
                            </svg>
                            Trang users
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('admin.donggop.index') }}" class="nav-link link-dark">
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
            <h2>Danh sách tài khoảng</h2>
            <table class="table" border="5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Avatar</th>
                        <th>Ngày tạo</th>
                        <th>Ngày update</th>
                        <th><a class="btn btn-primary" aria-current="page" href="{{ route('account.register') }}">
                                <i class="bi bi-plus-circle-dotted"></i> Thêm tài khoảng
                            </a></th>
                    </tr>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->password }}</td>
                            <td>
                                <img src="{{ $item->avatar }}" width=100 />
                            </td>
                            <td>{{ $item->created_at->format('d/m/Y') }}</td>
                            <td>{{ $item->updated_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('admin.admin.edit', ['id' => $item->id]) }}"
                                    class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <form class="d-inline" action="{{ route('admin.admin.destroy', ['id' => $item->id]) }}"
                                    method="POST">
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