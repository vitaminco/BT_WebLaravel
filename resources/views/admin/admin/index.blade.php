<x-layout title="Tài khoảng">
    <div class="container">
        <div class="row">
            <div class="ms-sm-auto px-md-4 table-responsive">
                <h2>Danh sách tài khoảng</h2>
                <table class="table" border="5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên</th>
                            <th>Email</th>
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
                                <td>
                                    @if ($item->avatar != '')
                                        <img src="{{ $item->avatar }}" width=100 />
                                    @else
                                        <i class="bi bi-person-circle" style="margin: 0 0 10px 0;font-size: 5rem;"></i>
                                    @endif
                                </td>
                                <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                <td>{{ $item->updated_at->format('d/m/Y') }}</td>
                                <td>
                                    <a href="{{ route('admin.admin.edit_admin', ['id' => $item->id]) }}"
                                        class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <form class="d-inline"
                                        action="{{ route('admin.admin.destroy', ['id' => $item->id]) }}" method="POST">
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
