<x-layout title="Bảng giá">
    <div class="container">
        <div class="row">
            <div class="ms-sm-auto px-md-4 table-responsive">
                <h2>Danh sách bảng giá</h2>
                <table class="table" border="5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Đối tượng</th>
                            <th>Gía giảm</th>
                            <th>Loại SP</th>
                            <th>Hình ảnh</th>
                            <th>Mô tả</th>
                            <th>Ghi chú</th>
                            <th>Ngày tạo</th>
                            <th>Ngày update</th>
                            <th><a class="btn btn-primary" aria-current="page" href="{{ route('admin.banggia.create') }}">
                                    <i class="bi bi-plus-circle-dotted"></i> Thêm bảng giá
                                </a></th>
                        </tr>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->doi_tuong }}</td>
                                <td>{{ number_format($item->gia_giam, 0, ',', '.') . ' ' . '' }}đ</td>
                                <td>{{ $item->loai_sp }}</td>
                                <td>
                                    <img src="{{ $item->anh_cover }}" width=100 />
                                </td>
                                <td>{{ $item->mo_ta }}</td>
                                <td>{{ $item->ghi_chu }}</td>
                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                <td>{{ $item->updated_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.banggia.edit', ['id' => $item->id]) }}"
                                        class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <form class="d-inline"
                                        action="{{ route('admin.banggia.destroy', ['id' => $item->id]) }}"
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
