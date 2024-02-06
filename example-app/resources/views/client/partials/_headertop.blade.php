<section class="headtop">
    <div class="container">
        <div class="row">
            <ul class="menutop">
                <li>
                    {{-- tai-sao-mua-hang-tai-melody-shop.html --}}
                    <a href="#" title="{{ trans('trans.header.title-why') }}">
                        {{ trans('trans.header.title-why') }}</a>
                </li>

                <li>
                    {{-- loi-ich-khi-su-dung-tai-khoan-mua-hang.html --}}
                    <a href="#" title={{ trans('trans.header.title-benefit') }}">
                        {{ trans('trans.header.title-benefit') }}</a>
                </li>

                <li>
                    {{-- tra-cuu-don-hang.html --}}
                    <a href="#" title="{{ trans('trans.header.title-status') }}">
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
