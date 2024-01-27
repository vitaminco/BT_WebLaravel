<x-layout title="Tin tức">
    <div class="container">
        <div class="row">
            <div class="ms-sm-auto px-md-4 table-responsive">
                <h2>Danh sách tin tức</h2>
                <table class="table" border="5">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Tên tin tức</th>
                            <th>Giam giá</th>
                            <th>Mô tả</th>
                            <th>Hình ảnh</th>
                            <th><a class="btn btn-primary" aria-current="page" href="{{ route('admin.tintuc.create') }}">
                                    <i class="bi bi-plus-circle-dotted"></i> Thêm Tin
                                </a></th>
                        </tr>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->ten_tin_tuc }}</td>
                                <td>{{ number_format($item->giam_gia) }}</td>
                                <td>{{ $item->mo_ta }}</td>
                                <td>
                                    <img src="{{ $item->anh_cover }}" width=100 />
                                </td>
                                <td>
                                    <a href="{{ route('admin.tintuc.edit', ['id' => $item->id]) }}"
                                        class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                    <form class="d-inline"
                                        action="{{ route('admin.tintuc.destroy', ['id' => $item->id]) }}"
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
