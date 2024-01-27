<x-layout title="Quản trị">
    <div class="container mt-3">
        <div class="row">
            <main class="ms-sm-auto px-md-4">
                <h2>Bảng thống kê đơn mua</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Số lượng mua</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Còn tồn</th>
                                <th>Số lượng khách mua: {{ $datac }} SP</th>
                                @foreach ($datagt as $item)
                                    <th>Tổng giá trị: {{ number_format($item->gia, 0, ',', '.') . ' ' . '' }}đ</th>
                                @endforeach
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $item->san_phams->ten_san_pham ?? '' }}</td>
                                    <td>{{ $item->so_luong }}</td>
                                    <td>{{ number_format($item->gia, 0, ',', '.') . ' ' . '' }}đ
                                    <td>{{ $item->san_phams->so_luong_ton ?? '' }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>
    </x-layoutlayout>
