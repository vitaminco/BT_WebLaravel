<x-layout title="Góp ý">
    <div class="container">
        <div class="row">
            <div class="ms-sm-auto px-md-4 table-responsive">
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
                                        action="{{ route('admin.donggop.destroy', ['id' => $item->id]) }}" method="POST">
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
