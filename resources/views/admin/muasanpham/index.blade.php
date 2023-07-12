<x-admin-layout title="Mua">
    <div>
        {{-- @if (!empty(session('success_msg')))
            <div class="mt-2 alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('success_msg') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif --}}

        <div class="col-md-10 mx-auto col-lg-5">
            <table class="table" border="5">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>dia chi</th>
                        <th>sdt</th>
                        <th>id sản phẩm</th>
                        <th>Tên sản phẩm</th>
                        <th>Gía</th>
                        <th>Mô tả</th>
                        <th><a class="btn btn-primary" aria-current="page" href="{{ route('admin.muasanpham.create') }}">
                                <i class="bi bi-plus-circle-dotted"></i> Mua Sản Phẩm
                            </a></th>
                    </tr>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->dia_chi }}</td>
                            <td>{{ $item->so_dt }}</td>
                            <td>{{ $item->id_san_pham }}</td>
                            <td>{{ $item->san_phams->ten_san_pham ?? '' }}</td>
                            <td>{{ $item->gia }}</td>
                            <td>{{ $item->mo_ta }}</td>
                            <td>
                                <a href="{{ route('admin.muasanpham.edit', ['id' => $item->id]) }}"
                                    class="btn btn-success"><i class="bi bi-pencil-square"></i></a>
                                <form class="d-inline"
                                    action="{{ route('admin.muasanpham.destroy', ['id' => $item->id]) }}"
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
        </div>
</x-admin-layout>
