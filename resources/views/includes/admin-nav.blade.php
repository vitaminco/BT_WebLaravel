<nav class="navbar navbar-expand-md navbar-light fixed-top nav-tool">
    <div class="container-fluid">
        <a href="/" class="navbar-brand animate__animated animate__pulse animate__infinite	infinite"
            style="filter: drop-shadow(3px 18px 4px rgba(0, 0, 0, 0.5)">
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
                <li>
                    <a href="{{ route('sanpham') }}" class="navbar-brand toolbar bootom-top">
                        Vé & Giá
                    </a>
                </li>
                <li>
                    <a href="{{ route('banggia') }}" class="navbar-brand toolbar bootom-top">
                        Ưu đãi
                    </a>
                </li>

                <li>
                    <a href="{{ route('tintuc') }}" class="navbar-brand toolbar bootom-top">
                        Tin Tức
                    </a>
                </li>
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
                        <i class="bi bi-cart4 mx-2"></i>
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

                    <div class="dropdown d-flex" style="align-items: center">
                        <button class="btn btn-outline-warning dropdown-toggle" type="button" id="dropdownMenuButton1"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{-- tên --}}
                            @if (Auth::user()->avatar != '')
                                <img src="{{ Auth::user()->avatar }}" class="rounded-circle border border-warning"
                                    width="25px" height="25px" style="object-fit: cover" />
                            @else
                                <i class="bi bi-person-circle"></i>
                            @endif
                            {{ Auth::user()->name }}

                        </button>
                        <ul class="dropdown-menu muinhon shadow" aria-labelledby="dropdownMenuButton1"
                            style="width: 100%;">

                            <li class="text-center">
                                @if (Auth::user()->avatar != '')
                                    <img src="{{ Auth::user()->avatar }}" class="rounded-circle border border-warning"
                                        width="150px" height="150px" style="object-fit: cover" />
                                @else
                                    <i class="bi bi-person-circle" style="margin: 0 0 10px 0;font-size: 8rem;"></i>
                                @endif
                                <br><a class="nav-link"
                                    href="{{ route('clients.account.edit', [Auth::user()->id]) }}"><i
                                        class="bi bi-pencil-square"></i> Thay đổi</a>
                            </li>

                            <li class="mt-3 shadow bootom-top">
                                <a class="dropdown-item" href="/"><i class="bi bi-house"></i> HOME</a>
                            </li>

                            <li class="shadow bootom-top">
                                <a class="dropdown-item" href="{{ route('index_Admin') }}">
                                    <i class="bi bi-person"></i>
                                    Admin</a>
                            </li>
                            <li class="shadow bootom-top">
                                <a class="dropdown-item" href="{{ route('index_Admin') }}">
                                    <i class="bi bi-gear"></i>
                                    Thông tin</a>
                            </li>
                            <li class="shadow bootom-top">
                                <a href="{{ route('help') }}" class="dropdown-item">
                                    <i class="bi bi-patch-question"></i>
                                    Hổ Trợ
                                </a>
                            </li>
                            <hr />
                            <li>
                                <a class="dropdown-item text-center text-danger" href="{{ route('account.logout') }}">
                                    ĐĂNG XUẤT <i class="bi bi-box-arrow-right"></i>
                                </a>
                            </li>
                        </ul>
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
