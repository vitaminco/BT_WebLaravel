<x-layout title="Danh mục">
    <div class="container">
        <div class="row">
            <div class="ms-sm-auto px-md-4 table-responsive">
                <h2>Danh sách cấu hình</h2>
                <table class="table" border="5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên công ty</th>
                            <th>Số ĐT</th>
                            <th>Email</th>
                            <th>Địa chỉ</th>
                            <th>Logo</th>
                            <th>Ghi chú</th>
                            <th>Ngày tạo</th>
                            <th>Ngày update</th>
                            <th><a class="btn btn-primary" aria-current="page" href="{{ route('admin.cauhinh.create') }}">
                                    <i class="bi bi-plus-circle-dotted"></i> Thêm cấu hình
                                </a></th>
                        </tr>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->ten_cong_ty }}</td>
                                <td>{{ $item->so_dt_tu_van }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->dia_chi }}</td>
                                <td>
                                    <img src="{{ $item->logo }}" width=100 />
                                </td>
                                <td>{{ $item->ghi_chu }}</td>
                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                <td>{{ $item->updated_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.cauhinh.edit', ['id' => $item->id]) }}"
                                        class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <form class="d-inline"
                                        action="{{ route('admin.cauhinh.destroy', ['id' => $item->id]) }}"
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
