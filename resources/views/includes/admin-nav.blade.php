<nav class="navbar navbar-expand-md navbar-light fixed-top nav-tool">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">
            @foreach ($datanb as $item)
                <img src="{{ $item->logo }}" alt="" width="70" height="70">
            @endforeach
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <a href="/"
                    class="nav-brand toolbar sidebar animate__animated animate__pulse animate__infinite	infinite">
                    <i class="bi bi-house"></i>
                    HOME
                </a>
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar sidebar bootom-top">
                    Vé & Giá
                </a>
                <a href="{{ route('banggia') }}" class="navbar-brand toolbar sidebar bootom-top">
                    Ưu đãi
                </a>
                <a href="{{ route('help') }}" class="navbar-brand toolbar sidebar bootom-top">
                    Hổ Trợ
                </a>
                <a href="{{ route('tintuc') }}" class="navbar-brand toolbar sidebar bootom-top">
                    Tin Tức
                </a>
            </ul>
            {{-- sreach --}}
            <form class="d-flex">
                <input class="form-control me-2 border border-warning sidebar right-left" name="tukhoa" type="search"
                    list="items" placeholder="Search" aria-label="Search">
                <datalist id="items">
                    @foreach ($dataopsr as $items)
                        <option value="{{ $items->ten_san_pham }}"></option>
                    @endforeach
                </datalist>
                <button class="btn btn-outline-warning rounded-pill sidebar left-right" type="submit"><i
                        class="bi bi-search-heart"></i></button>
            </form>
            {{--  --}}
            <form class="d-flex">
                <div class="toolbar sidebar">
                    <a href="{{ route('clients.muasanpham.index') }} " class="toolbar position-relative">
                        <i class="bi bi-cart4"></i>
                        Giỏ hàng
                        <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                            @if (Auth::check())
                                +
                            @else
                                <i class="bi bi-question"></i>
                            @endif
                            <span class="visually-hidden">unread messages</span>
                        </span>
                    </a>
                </div>
                @if (Auth::check())
                    <div class="toolbar sidebar" style="z-index: 2;">
                        {{-- tên --}}
                        @if (Auth::user()->avatar != '')
                            <img src="{{ Auth::user()->avatar }}" class="rounded-circle border border-warning"
                                width="25px" height="25px" />
                        @else
                            <i class="bi bi-person-circle"></i>
                        @endif
                        {{ Auth::user()->name }}
                        <div class="sidebar-item muinhon toolbar">
                            <div class="text-center">
                                @if (Auth::user()->avatar != '')
                                    <img src="{{ Auth::user()->avatar }}" class="rounded-circle border border-warning"
                                        width="200px" height="200px" />
                                @else
                                    <i class="bi bi-person-circle" style="margin: 0 0 10px 0;font-size: 8rem;"></i>
                                @endif
                                <br><a class="nav-link"
                                    href="{{ route('clients.account.edit', [Auth::user()->id]) }}"><i
                                        class="bi bi-pencil-square"></i> Thay đổi</a>
                            </div>
                            {{--  --}}
                            <div class=" d-flex flex-column flex-shrink-0 p-3 bg-light list-tool">
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

                                    <a class="nav-link btn btn-outline-danger" aria-current="page"
                                        href="{{ route('account.logout') }}">
                                        ĐĂNG XUẤT</a>

                                </div>
                            </div>
                            {{--  --}}
                        </div>
                    </div>
                @else
                    <a class="nav-link btn btn-outline-danger toolbar" aria-current="page"
                        href="{{ route('account.register') }}">ĐĂNG KÝ</a>

                    <a class="nav-link btn toolbar bg-warning" aria-current="page"
                        href="{{ route('account.login') }}">ĐĂNG NHẬP</a>

                @endif
            </form>
        </div>
    </div>
</nav>
