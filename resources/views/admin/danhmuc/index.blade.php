<x-admin-layout>
    <h2>Danh sách danh mục</h2>
</x-admin-layout>
<div class="row">
    <div class="col-12 table-responsive">
        <table class="table" border="5">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên</th>
                    <th>Ngày tạo</th>
                    <th>Ngày update</th>
                    <th><a class="btn btn-primary" aria-current="page" href="{{ route('admin.danhmuc.create') }}">
                            <i class="bi bi-plus-circle-dotted"></i> Thêm Danh Sách
                        </a></th>
                </tr>
            <tbody>
                @foreach ($data as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->ten_danh_muc }}</td>
                        <td>{{ $item->created_at->format('d/m/Y') }}</td>
                        <td>{{ $item->updated_at->format('d/m/Y') }}</td>
                        <td>
                            <a href="{{ route('admin.danhmuc.edit', ['id' => $item->id]) }}" class="btn btn-success"><i
                                    class="bi bi-pencil-square"></i></a>
                            <form class="d-inline" action="{{ route('admin.danhmuc.destroy', ['id' => $item->id]) }}"
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
