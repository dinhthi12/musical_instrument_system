<div class="big-bn-right">
    <div class="title-homenew">
        <h2 class="txt">
            <a href="https://tongkhonhaccu.com/tin-tuc.html">{{ trans('trans.new') }}</a>
        </h2>
        <div class="listEvent">
            <p>
                <a
                    href="https://tongkhonhaccu.com/mau-dan-organ-yamaha-psre473-thoa-man-moi-nhu-cau-am-nhac-cua-ban.html">
                    {{ trans('trans.see') }}
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
                            <img src="{{ asset('/assets/newsfeed/' . $newsFeed->featured_image) }}" title="#"
                                alt="#" />
                        </a>
                    </p>
                </div>
                <h3>
                    {{ trans($newsFeed->headline) }}
                </h3>
                <span class="recent-date">{{ $newsFeed->created_at }}</span>
                <a href="#" class="alink-all" title="{{ trans($newsFeed->headline) }}" rel="nofollow"></a>
            </li>
        @endforeach
    </ul>
</div>
