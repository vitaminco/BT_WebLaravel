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
            <ul class="navbar-nav me-auto mb-2 mb-md-0"></ul>
            <form class="d-flex">
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar">
                    Sản Phẩm
                </a>
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar">
                    Giải Pháp
                </a>
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar">
                    Khách Hàng
                </a>
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar">
                    Phí Dịch Vụ
                </a>
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar">
                    Hổ Trợ
                </a>
                <a href="{{ route('tintuc') }}" class="navbar-brand toolbar">
                    Tin Tức
                </a>
                <a href="{{ route('sanpham') }}" class="navbar-brand toolbar">
                    Về Trang
                </a>
                {{--  --}}
                <div class="toolbar sidebar">
                    <i class="bi bi-bell"></i>
                    Thông báo
                    <div class="sidebar-item muinhon muinhon-item">
                        {{--  --}}
                        <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white"
                            style="width: 380px;overflow-y: scroll;
                        max-height: 454px;">
                            <a href="/"
                                class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
                                <svg class="bi me-2" width="30" height="24">
                                    <use xlink:href="#bootstrap" />
                                </svg>
                                <span class="fs-5 fw-semibold">List group</span>
                            </a>
                            <div class="list-group list-group-flush border-bottom scrollarea">

                                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">List group item heading</strong>
                                        <small class="text-muted">Tues</small>
                                    </div>
                                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the
                                        heading
                                        and date.</div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">List group item heading</strong>
                                        <small class="text-muted">Mon</small>
                                    </div>
                                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the
                                        heading
                                        and date.</div>
                                </a>

                                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight"
                                    aria-current="true">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">List group item heading</strong>
                                        <small class="text-muted">Wed</small>
                                    </div>
                                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the
                                        heading
                                        and date.</div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">List group item heading</strong>
                                        <small class="text-muted">Tues</small>
                                    </div>
                                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the
                                        heading
                                        and date.</div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">List group item heading</strong>
                                        <small class="text-muted">Mon</small>
                                    </div>
                                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the
                                        heading
                                        and date.</div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight"
                                    aria-current="true">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">List group item heading</strong>
                                        <small class="text-muted">Wed</small>
                                    </div>
                                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the
                                        heading
                                        and date.</div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">List group item heading</strong>
                                        <small class="text-muted">Tues</small>
                                    </div>
                                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the
                                        heading
                                        and date.</div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">List group item heading</strong>
                                        <small class="text-muted">Mon</small>
                                    </div>
                                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the
                                        heading
                                        and date.</div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight"
                                    aria-current="true">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">List group item heading</strong>
                                        <small class="text-muted">Wed</small>
                                    </div>
                                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the
                                        heading
                                        and date.</div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">List group item heading</strong>
                                        <small class="text-muted">Tues</small>
                                    </div>
                                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the
                                        heading
                                        and date.</div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action py-3 lh-tight">
                                    <div class="d-flex w-100 align-items-center justify-content-between">
                                        <strong class="mb-1">List group item heading</strong>
                                        <small class="text-muted">Mon</small>
                                    </div>
                                    <div class="col-10 mb-1 small">Some placeholder content in a paragraph below the
                                        heading
                                        and date.</div>
                                </a>
                            </div>
                        </div>


                        {{--  --}}
                    </div>
                </div>
                {{--  --}}
                <div class="toolbar sidebar">
                    <a href="{{ route('admin.muasanpham.index') }}">
                        <i class="bi bi-cart4"></i>
                        Giỏ hàng
                    </a>
                </div>
                @if (Auth::check())
                    <div class="toolbar sidebar">
                        <i class="bi bi-person-circle"></i>
                        {{ Auth::user()->name }}
                        <div class="sidebar-item muinhon">
                            {{--  --}}
                            <div class=" d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px;">
                                <ul class="nav nav-pills flex-column mb-auto">
                                    <li class="nav-item">
                                        <a href="/" class="nav-link active" aria-current="page">
                                            <svg class="bi me-2" width="16" height="16">
                                                <use xlink:href="#home" />
                                            </svg>
                                            Home
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.danhmuc.index') }}" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16">
                                                <use xlink:href="#speedometer2" />
                                            </svg>
                                            Trang danh
                                            sách
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.sanpham.index') }}" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16">
                                                <use xlink:href="#table" />
                                            </svg>
                                            Trang sản phẩm
                                        </a>
                                    </li>
                                    <li>
                                        <a href="{{ route('admin.tintuc.index') }}" class="nav-link link-dark">
                                            <svg class="bi me-2" width="16" height="16">
                                                <use xlink:href="#speedometer2" />
                                            </svg>
                                            Trang Tin Tức
                                        </a>
                                    </li>
                                </ul>
                                <hr>
                                <div class="dropdown">
                                    <button type="submit" class="btn btn-outline-danger">
                                        <a class="nav-link" aria-current="page"
                                            href="{{ route('account.logout') }}">
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

                    <button type="submit" class="btn btn-warning toolbar" style="margin-left:10px"><a
                            class="nav-link" aria-current="page" href="{{ route('account.login') }}">ĐĂNG NHẬP</a>
                    </button>
                @endif
            </form>
        </div>
    </div>
</nav>
