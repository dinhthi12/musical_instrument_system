<section class="headmiddle">
    <div class="container">
        <div class="row">
            <div class="logo">
                <h1 class="logotext">
                    MELODY - Tổng kho Guitar, Piano | Organ, Ukulele, Phụ kiện chính
                    hãng
                </h1>
                <a href="" target="" rel="nofollow"><img alt="Logo"
                        src="{{ asset('/assets/logo.svg') }}" /></a>
            </div>

            <form method="post" class="headsearch" onsubmit="doSearch(); return false;">
                <input type="text" class="topinput" name="keyword" id="keyword" onkeyup="get_search(this.value)"
                    maxlength="50" placeholder="{{ trans('trans.header.placeholder-search') }}" autocomplete="off" />
                <div id="search-autocomplete"></div>
                <button type="button" class="btntop" onclick="doSearch(); return false;">
                    <i class="fa fa-search"></i>
                </button>
            </form>
            <div class="notify-box fr">
                <ul>
                    <li class="login">
                        <a href="#" title="{{ trans('trans.header.label.signin') }}" rel="nofollow">
                            <span class="fa fa-user"> </span>
                            <label>{{ trans('trans.header.label.signin') }}</label>
                        </a>
                        <a href="#" title="{{ trans('trans.header.label.signup') }}" rel="nofollow">
                            <span class="fa fa-user-plus"> </span>
                            <label>{{ trans('trans.header.label.signup') }}</label>
                        </a>
                    </li>

                    <li class="cart-hea">
                        <a href="#" title="Giỏ hàng" rel="nofollow">
                            <span class="fa fa-shopping-cart">
                                <i>0</i>
                            </span>
                            <label>{{ trans('trans.header.label.cart') }}</label>
                        </a>
                    </li>
                    <li class="hotline-li">
                        <a href="javascript:void(0);" title="{{ trans('trans.header.hotline') }}" rel="nofollow">
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
