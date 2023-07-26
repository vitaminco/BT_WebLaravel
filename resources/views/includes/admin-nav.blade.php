<nav class="navbar navbar-expand-md navbar-light fixed-top"
    style="background: #fffffff5;;z-index:3; padding:10px; position: sticky;top: 0;right: 0;left: 0; box-shadow: 0 4px 8px rgba(84,104,120,0.1);">
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
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar sidebar tin">
                    Sản phẩm & Giá
                </a>
                <a href="{{ route('banggia') }}" class="navbar-brand toolbar sidebar tin">
                    Ưu đãi
                </a>
                <a href="{{ route('help') }}" class="navbar-brand toolbar sidebar tin">
                    Hổ Trợ
                </a>
                <a href="{{ route('tintuc') }}" class="navbar-brand toolbar sidebar tin">
                    Tin Tức
                </a>
            </ul>
            {{-- sreach --}}
            <form class="d-flex">
                <input class="form-control me-2 border border-warning ctl" name="tukhoa" type="search"
                    placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-warning rounded-pill sidebar ctr" type="submit"><i
                        class="bi bi-search-heart"></i></button>
            </form>
            {{--  --}}
            <form class="d-flex">
                <div class="toolbar sidebar">
                    <a href="{{ route('admin.muasanpham.index') }} " class="toolbar position-relative">
                        <i class="bi bi-cart4"></i>
                        Giỏ hàng
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            99+
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </div>
                @if (Auth::check())
                    <div class="toolbar sidebar" style="">
                        {{-- tên --}}
                        @if (Auth::user()->avatar != '')
                            <img src="{{ Auth::user()->avatar }}" class="rounded-circle border border-warning"
                                width="25px" height="25px" />
                        @else
                            <i class="bi bi-person-circle"></i>
                        @endif
                        {{ Auth::user()->name }}
                        <div class="sidebar-item muinhon toolbar"
                            style="margin: 12px 2px 0 -183px;background-color: cornsilk;border-radius: 40px;width: 356px;">
                            <div style="text-align: center;">
                                @if (Auth::user()->avatar != '')
                                    <img src="{{ Auth::user()->avatar }}" class="rounded-circle border border-warning"
                                        style="margin: 0 0 10px 0;" width="50%" height="50%" />
                                @else
                                    <i class="bi bi-person-circle" style="margin: 0 0 10px 0;font-size: 8rem;"></i>
                                @endif
                                <br><a class="nav-link" href="{{ route('admin.admin.edit', [Auth::user()->id]) }}"><i
                                        class="bi bi-pencil-square"></i> Thay
                                    đổi</a>
                            </div>
                            {{--  --}}
                            <div class=" d-flex flex-column flex-shrink-0 p-3 bg-light"
                                style="width: 100%;margin: 20px 0 10px 0; box-shadow: 0 2px 3px 0 rgb(0, 0, 0, 0.1)">
                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li class="nav-item ani-nav">
                                        <a href="/" class="nav-link link-dark">
                                            <i class="bi bi-house"></i>
                                            Home
                                        </a>
                                    </li>
                                    <li class="nav-item ani-nav">
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
