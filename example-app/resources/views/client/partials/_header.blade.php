<header id="header" class="">
    <section class="headtop">
        <div class="container">
            <div class="row">
                <ul class="menutop">
                    <li>
                        <a href="https://tongkhonhaccu.com/tai-sao-mua-hang-tai-tygy-shop.html"
                            title="{{ trans('trans.header.title-why') }}">
                            {{ trans('trans.header.title-why') }}</a>
                    </li>

                    <li>
                        <a href="https://tongkhonhaccu.com/loi-ich-khi-su-dung-tai-khoan-mua-hang.html"
                            title={{ trans('trans.header.title-benefit') }}">
                            {{ trans('trans.header.title-benefit') }}</a>
                    </li>

                    <li>
                        <a href="https://tongkhonhaccu.com/tra-cuu-don-hang.html"
                            title="{{ trans('trans.header.title-status') }}">
                            {{ trans('trans.header.title-status') }}</a>
                    </li>
                    <li>
                        <div class="dropdown">
                            <i class="fa fa-language" aria-hidden="true"></i>
                            <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown"
                                title="{{ trans('trans.header.title-language') }}">{{ trans('trans.header.title-language') }}
                            </a>

                            <ul class="dropdown-menu">
                                <li><a
                                        href="{{ route('index', ['locale' => 'vi']) }}">{{ trans('trans.header.language.vn') }}</a>
                                </li>
                                <li><a
                                        href="{{ route('index', ['locale' => 'ja']) }}">{{ trans('trans.header.language.ja') }}</a>
                                </li>
                                <li><a
                                        href="{{ route('index', ['locale' => 'en']) }}">{{ trans('trans.header.language.en') }}</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>


    <section class="headmiddle">
        <div class="container">
            <div class="row">
                <div class="logo">
                    <h1 class="logotext">
                        MELODY - Tổng kho Guitar, Piano | Organ, Ukulele, Phụ kiện chính
                        hãng
                    </h1>
                    <a href="/" target="" rel="nofollow"><img alt="Logo"
                            src="{{ asset('/assets/logo.svg') }}" /></a>
                </div>

                <form method="post" class="headsearch" onsubmit="doSearch(); return false;">
                    <input type="text" class="topinput" name="keyword" id="keyword"
                        onkeyup="get_search(this.value)" maxlength="50"
                        placeholder="{{ trans('trans.header.placeholder-search') }}" autocomplete="off" />
                    <div id="search-autocomplete"></div>
                    <button type="button" class="btntop" onclick="doSearch(); return false;">
                        <i class="fa fa-search"></i>
                    </button>
                </form>
                <div class="notify-box fr">
                    <ul>
                        <li class="login">
                            <a href="https://www.tongkhonhaccu.com/dang-nhap.html" title="Đăng nhập" rel="nofollow">
                                <span class="fa fa-user"> </span>
                                <label>{{ trans('trans.header.label.signin') }}</label>
                            </a>
                            <a href="/dang-ky.html" title="Đăng ký" rel="nofollow">
                                <span class="fa fa-user-plus"> </span>
                                <label>{{ trans('trans.header.label.signup') }}</label>
                            </a>
                        </li>

                        <li class="cart-hea">
                            <a href="https://www.tongkhonhaccu.com/gio-hang.html?returnpath=&combo=" title="Giỏ hàng"
                                rel="nofollow">
                                <span class="fa fa-shopping-cart">
                                    <i>0</i>
                                </span>
                                <label>{{ trans('trans.header.label.cart') }}</label>
                            </a>
                        </li>
                        <li class="hotline-li">
                            <a href="javascript:void(0)" title="Hotline" rel="nofollow">
                                <span class="fa fa-phone"><i>{{ trans('trans.header.hotline') }}</i></span>
                                <label>
                                    <p class="red bold">
                                        0796.69.2773 (Đà Nẵng)
                                    </p>
                                    <p class="red bold">
                                        0926.345.294 (Huế)
                                    </p>
                                </label>
                            </a>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <nav class="wh-menu">
        <div class="container">
            <ul class="navmenu">

                @foreach ($allCate as $cate)
                    <li>
                        <a href="#">
                            <span><img src="{{ asset('/assets/menu/' . $cate->category_image) }}"
                                    alt="{{ $cate->category_name }}">{{ $cate->category_name }}</span>
                        </a>
                        @if ($cate->children->count() > 0)
                            <div class="sub-menu">
                                <div class="msm-col col-md-6">
                                    <h3 class="nsm-title">
                                        {{ trans('trans.category', ['category' => $cate->category_name]) }}</h3>
                                    <ul class="nsm-list nsm-list-2">

                                        {{-- Sử dụng đệ quy để xây dựng submenu --}}

                                        @foreach ($cate->children as $subcategory)
                                            <li>

                                                <a href="#">{{ $subcategory->category_name }}</a>
                                                @if ($subcategory->children->count() > 0)
                                                    {{-- Đệ quy --}}
                                                    @include('client/partials/submenu', [
                                                        'subcategories' => $cate->children,
                                                    ])
                                                @endif
                                            </li>
                                        @endforeach

                                </div>
                            </div>
                        @endif
                    </li>
                @endforeach

            </ul>
        </div>
    </nav>
</header>
