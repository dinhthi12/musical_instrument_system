<header class="header sticky">
    <div class="row top container">
        <div class="col-lg-6">
            <div class="left">
                <p>Kênh người bán</p>
                <p>Tải ứng dụng</p>
                <p>Kết nối &nbsp
                    <i class="fa fa-facebook-official" aria-hidden="true"></i> &nbsp
                    <i class="fa fa-instagram" aria-hidden="true"></i>
                </p>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="right">
                <ul class="right_side">
                    <li class="nav-item submenu dropdown" data-bs-toggle="dropdown" aria-expanded="false">
                        <a href="#">
                            Ngôn ngữ &nbsp
                            <i class="fa fa-language" aria-hidden="true"></i>
                        </a>
                    </li>
                    <ul class="dropdown-menu">
                        <li class="nav-item"><a class="nav-link" href="#">Action</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Another action</a></li>
                        <li class="nav-item"><a class="nav-link" href="#">Something else here</a></li>
                    </ul>
                    <li><a href="#">Thông báo &nbsp <i class="fa fa-bell-o" aria-hidden="true"></i></a></li>
                    <li><a href="#">Đăng Ký</a></li>
                    <li><a href="#">Đăng nhập</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <nav class="navbar navbar-expand-lg w-100">
            <a class="navbar-brand" href="{{ route('index') }}">
                <img class="logo" src="{{ asset('assets/logo.svg') }}" width="80px" alt="" />
            </a>
            <div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 pull-left" id="menu-container">
                    @foreach ($allCate as $cate)
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle">{{ $cate->category_name }}</a>
                            @if ($cate->children->count() > 0)
                                {{-- Sử dụng đệ quy để xây dựng submenu --}}
                                <ul class="dropdown-menu">
                                    @foreach ($cate->children as $subcategory)
                                        <li class="nav-item submenu dropdown">
                                            <a href="#"
                                                class="nav-link dropdown-toggle">{{ $subcategory->category_name }}</a>
                                            @if ($subcategory->children->count() > 0)
                                                {{-- Đệ quy --}}
                                                @include('client/partials/submenu', [
                                                    'subcategories' => $cate->children,
                                                ])
                                            @endif
                                        </li>
                                    @endforeach
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
                <div class="custom-search">
                    <input class="form-control" type="search" placeholder="Search" aria-label="Search">
                </div>
                <ul class="nav navbar-nav navbar-right right_nav pull-right">

                    <li class="nav-item">
                        <a href="#" class="icons">
                            <i class="fa fa-shopping-cart"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
