@extends('client.master')
@section('title', getPageTitle(__('trans.welcome')))
@section('content')

    <div class="container-main">
        <div class="container">
            <section class="big-banner">
                <div class="big-bn-left">
                    <div class="homebanner">

                        <div id="sync1" class="owl-carousel">
                            <div class="item">
                                <a href="https://tongkhonhaccu.com/khai-truong-showroom-piano-guitar-cau-giay-ha-noi.html"
                                    target="" rel="nofollow"><img alt="THÔNG BÁO CHUYỂN SHOWROOM"
                                        src="{{ asset('/assets/slides/slide2.png') }}" /></a>
                            </div>

                            <div class="item">
                                <a href="https://tongkhonhaccu.com/tygy-tuyen-dung-nhan-vien-thuong-mai-dien-tu.html"
                                    target="" rel="nofollow"><img alt="TUYỂN DỤNG NV TMĐT"
                                        src="{{ asset('/assets/slides/slide2.jpg') }}" /></a>
                            </div>

                            <div class="item">
                                <a href="https://tongkhonhaccu.com/tygy-tuyen-dung-giao-vien-am-nhac.html" target=""
                                    rel="nofollow"><img alt="TUYỂN DỤNG GIẢNG VIÊN"
                                        src="{{ asset('/assets/slides/slide1.png') }}" /></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="big-bn-right">
                    <div class="title-homenew">
                        <h2 class="txt">
                            <a href="https://tongkhonhaccu.com/tin-tuc.html">{{ trans('trans.new')}}</a>
                        </h2>
                        <div class="listEvent">
                            <p>
                                <a
                                    href="https://tongkhonhaccu.com/mau-dan-organ-yamaha-psre473-thoa-man-moi-nhu-cau-am-nhac-cua-ban.html">
                                    {{ trans('trans.see')}}
                                </a>
                            </p>
                            <button class="btn-sonar"></button>
                        </div>
                    </div>
                    <ul class="list-new-home">
                        @foreach ($allNewsFeed as $newsFeed)
                            <li>
                                <div class="box-thumbnail">
                                    <p class="hm-reponsive">
                                        <a href="#" title="#">
                                            <img src="{{ asset('/assets/newsfeed/' . $newsFeed->featured_image) }}"
                                                title="#" alt="#" />
                                        </a>
                                    </p>
                                </div>
                                <h3>
                                    {{trans($newsFeed->headline) }}
                                </h3>
                                <span class="recent-date">{{ $newsFeed->created_at }}</span>
                                <a href="#" class="alink-all" title="#" rel="nofollow"></a>
                            </li>
                        @endforeach

                    </ul>
                </div>
            </section>
        </div>
    </div>

@endsection
