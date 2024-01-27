<header class="navbar navbar-expand-md navbar-light fixed-top nav-tool">
    <div class="container-fluid">
        <a href="/" class="navbar-brand">
            HOME
        </a>
        <ul class="nav d-flex">
            <li class="nav-item">
                <a href="{{ route('admin.category.index') }}" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2" />
                    </svg>
                    <i class="bi bi-list-columns-reverse"></i>
                    Trang danh sách
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.sanpham.index') }}" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#table" />
                    </svg>
                    <i class="bi bi-film"></i>
                    Trang sản phẩm
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.tintuc.index') }}" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2" />
                    </svg>
                    <i class="bi bi-journal-text"></i>
                    Trang Tin Tức
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.admin.index') }}" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2" />
                    </svg>
                    <i class="bi bi-person"></i>
                    Trang users
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.donggop.index') }}" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2" />
                    </svg>
                    <i class="bi bi-chat-square-heart"></i>
                    Trang đóng góp
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.banggia.index') }}" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2" />
                    </svg>
                    <i class="bi bi-table"></i>
                    Trang ưu đãi
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.help.index') }}" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2" />
                    </svg>
                    <i class="bi bi-patch-question"></i>
                    Trang trợ giúp
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('admin.cauhinh.index') }}" class="nav-link link-dark">
                    <svg class="bi me-2" width="16" height="16">
                        <use xlink:href="#speedometer2" />
                    </svg>
                    <i class="bi bi-gear"></i>
                    Trang cấu hình
                </a>
            </li>
        </ul>
    </div>
</header>
