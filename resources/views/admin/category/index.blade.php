<x-layout title="Danh mục">
    <div class="container">
        <div class="row">
            <div class="ms-sm-auto px-md-4 table-responsive">
                <h2>Danh sách danh mục</h2>
                <table class="table" border="5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Hình danh mục</th>
                            <th>Ngày tạo</th>
                            <th>Ngày update</th>
                            <th><a class="btn btn-primary" aria-current="page" href="{{ route('admin.category.create') }}">
                                    <i class="bi bi-plus-circle-dotted"></i> Thêm Danh Sách
                                </a></th>
                        </tr>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->ten_danh_muc }}</td>
                                <td>
                                    <img src="{{ $item->anh_cover }}" width=100 />
                                </td>
                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                <td>{{ $item->updated_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.category.edit', ['id' => $item->id]) }}"
                                        class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <form class="d-inline"
                                        action="{{ route('admin.category.destroy', ['id' => $item->id]) }}"
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
