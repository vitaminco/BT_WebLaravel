<x-layout title="Help">
    <div class="container">
        <div class="row">
            <div class="ms-sm-auto px-md-4 table-responsive">
                <h2>Danh sách help</h2>
                <table class="table" border="5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Câu hỏi</th>
                            <th>Trả lời</th>
                            <th>Hình ảnh</th>
                            <th>Ghi chú</th>
                            <th>Ngày tạo</th>
                            <th>Ngày update</th>
                            <th><a class="btn btn-primary" aria-current="page" href="{{ route('admin.help.create') }}">
                                    <i class="bi bi-plus-circle-dotted"></i> Thêm giúp đỡ
                                </a></th>
                        </tr>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->cau_hoi }}</td>
                                <td>{{ $item->tra_loi }}</td>
                                <td>
                                    <img src="{{ $item->anh_help }}" width=100 />
                                </td>
                                <td>{{ $item->ghi_chu }}</td>
                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                <td>{{ $item->updated_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.help.edit', ['id' => $item->id]) }}"
                                        class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <form class="d-inline"
                                        action="{{ route('admin.help.destroy', ['id' => $item->id]) }}" method="POST">
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
