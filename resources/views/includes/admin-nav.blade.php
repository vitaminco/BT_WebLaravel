<nav class="navbar navbar-expand-md navbar-light fixed-top bg-light"
    style="background: #fff;;z-index:3; padding:10px; position: sticky;top: 0;right: 0;left: 0; box-shadow: 0 4px 8px rgba(84,104,120,0.1);">
    <div class="container-fluid">
        <a href="/" class="navbar-brand toolbar">
            <i class="bi bi-house"></i>
            HOME
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar sidebar">
                    Sản Phẩm
                </a>
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar sidebar">
                    Giải Pháp
                </a>
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar sidebar">
                    Khách Hàng
                </a>
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar sidebar">
                    Phí Dịch Vụ
                </a>
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar sidebar">
                    Hổ Trợ
                </a>
                <a href="{{ route('tintuc') }}" class="navbar-brand toolbar sidebar">
                    Tin Tức
                </a>
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar sidebar">
                    Về Trang
                </a>
                {{--  --}}
            </ul>
            <form class="d-flex">

                <div class="toolbar sidebar">
                    <a href="{{ route('admin.muasanpham.index') }} " class="toolbar">
                        <i class="bi bi-cart4"></i>
                        Giỏ hàng
                    </a>
                </div>
                @if (Auth::check())
                    <div class="toolbar sidebar">
                        <i class="bi bi-person-circle"></i>
                        {{ Auth::user()->name }}
                        <div class="sidebar-item muinhon" style="margin: 12px 0 0 -105px;">
                            {{--  --}}
                            <div class=" d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li class="nav-item">
                                        <a href="/" class="nav-link active" aria-current="page">
                                            <i class="bi bi-house"></i>
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{ route('index_Admin') }}" class="nav-link link-dark">
                                            <i class="bi bi-person"></i>
                                            Admin
                                        </a>
                                    </li>
                                </ul>
                                <hr>
                                <div class="dropdown">
                                    <button type="submit" class="btn btn-outline-danger">
                                        <a class="nav-link" aria-current="page" href="{{ route('account.logout') }}">
                                            ĐĂNG XUẤT</a>
                                    </button>
                                </div>
                            </div>
                            {{--  --}}
                        </div>
                    </div>
                @else
                    <button type="submit" class="btn btn-outline-danger toolbar"><a class="nav-link"
                            aria-current="page" href="{{ route('account.register') }}">ĐĂNG KÝ</a>
                    </button>

                    <button type="submit" class="btn btn-warning toolbar" style="margin-left:10px"><a class="nav-link"
                            aria-current="page" href="{{ route('account.login') }}">ĐĂNG NHẬP</a>
                    </button>
                @endif
            </form>
        </div>
    </div>
</nav>
