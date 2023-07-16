<x-admin-layout title="Chi tiết đơn mua">
    <div class="container">
        <div class="row" style="margin: 10px">
            <div class="col-8">
                <img src="{{ $data->san_phams->anh_cover ?? '' }}" width=100% height="500" style="object-fit: cover; " />
            </div>
            <div class="col-4">
                <div class="p-4 p-md-5 border rounded-3 bg-light">
                    <ul class="nav flex-column ct-mua">
                        <h3>Thông tin sản phẩm</h3>
                        <li class="nav-item">
                            <b>Tên sản phẩm: </b>{{ $data->san_phams->ten_san_pham ?? '' }}
                        </li>
                        <li class="nav-item">
                            <b>Giá: </b>{{ number_format($data->gia) }}
                        </li>
                        <li class="nav-item">
                            <b>Mô tả: </b>{{ $data->mo_ta }}
                        </li>
                        <h3>Thông tin người mua</h3>
                        <li class="nav-item">
                            <b>Họ & Tên: </b>{{ $data->name }}
                        </li>
                        <li class="nav-item">
                            <b>Địa chỉ: </b>{{ $data->dia_chi }}
                        </li>
                        <li class="nav-item">
                            <b>Số ĐT: </b>{{ $data->so_dt }}
                        </li>
                    </ul>
                    <div class="mt-3" style="text-align: center;">
                        <a href="{{ route('admin.muasanpham.edit', ['id' => $data->id]) }}" class="btn btn-success"><i
                                class="bi bi-pencil-square"></i></a>
                        <form class="d-inline" action="{{ route('admin.muasanpham.destroy', ['id' => $data->id]) }}"
                            method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger"><i class="bi bi-trash3"></i></button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

</x-admin-layout>
