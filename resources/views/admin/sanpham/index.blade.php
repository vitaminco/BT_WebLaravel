<x-admin-layout>
    <h2>Danh sách danh mục sản phẩm</h2>
    <div class="row">
        <div class="col-12 table-responsive">
            <table class="table" border="5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên sản phẩm</th>
                        <th>Gía</th>
                        <th>Tên danh mục</th>
                        <th>Mô tả</th>
                        <th>Hình ảnh</th>
                        <th>ID danh mục</th>
                        <th>Ngày tạo</th>
                        <th>Ngày update</th>
                        <th><a class="btn btn-primary" aria-current="page" href="{{ route('admin.sanpham.create') }}">
                                <i class="bi bi-plus-circle-dotted"></i> Thêm Sản Phẩm
                            </a></th>
                    </tr>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->ten_san_pham }}</td>
                            <td>{{ number_format($item->gia) }}</td>
                            <td>{{ $item->danh_mucs->ten_danh_muc ?? '' }}</td>
                            <td>{{ $item->mo_ta }}</td>
                            <td>
                                <img src="{{ $item->anh_cover }}" width=100 />
                            </td>
                            <td>{{ $item->id_danh_muc }}</td>
                            <td>{{ $item->created_at->format('d/m/Y') }}</td>
                            <td>{{ $item->updated_at->format('d/m/Y') }}</td>
                            <td>
                                <a href="{{ route('admin.sanpham.edit', ['id' => $item->id]) }}"
                                    class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <form class="d-inline"
                                    action="{{ route('admin.sanpham.destroy', ['id' => $item->id]) }}" method="POST">
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
