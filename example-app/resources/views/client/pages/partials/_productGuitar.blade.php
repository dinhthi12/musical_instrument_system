<section class="box-home all mt10">
    <div class="navcate">
        <h2 class="title"><a href="#">Guitar</a></h2>
    </div>
    <ul class="listproduct02 listproduct listproduct-col3">
        @foreach ($guitarProduct as $guitarProduct)
            @if (is_array($guitarProduct))
                <li>
                    <div class="bglipro">
                        <figure class="reponsive-img">
                            <a href="#" title="#">
                                <img src="{{ asset('/assets/products/' . $guitarProduct['product_image']) }}"
                                    title="#" alt="#" />
                            </a>
                        </figure>
                        <div class="c-product-item_info">
                            <div class="label-wrap">
                                @if ($guitarProduct['product_status'] == 0)
                                    <span class="lb-hot">HOT</span>
                                @endif
                                @if ($guitarProduct['product_discount'] > 0)
                                    <span class="lb-sale">{{ $guitarProduct['product_discount'] }} %</span>
                                @endif
                            </div>
                            <h4>
                                <a href="#"
                                    title="{{ $guitarProduct['product_name'] }}">{{ $guitarProduct['product_name'] }}</a>
                            </h4>
                            <div class="price-box">
                                <span
                                    class="c-price fl">{{ number_format($guitarProduct['product_price'], 0, ',', '.') }}
                                    VND</span>
                                <div class="clear"></div>
                            </div>
                        </div>
                        <figure class="bginfo">
                            <h4>{{ $guitarProduct['product_name'] }}</h4>

                            <span class="c-price">{{ number_format($guitarProduct['product_price'], 0, ',', '.') }}
                                VND</span>

                            <div class="info-des info-gif clear">
                                <span>Kiếm tiền Online thu nhập khủng cùng MELODY MUSIC
                                    <a href="/dang-ky-cong-tac-vien.html" target="_blank">[Tìm
                                        hiểu]</a></span><span>Miễn phí
                                    đăng bán nhạc cụ không còn nhu cầu sử dụng<a href="/an-toan-mua-ban.html"
                                        target="_blank">
                                        [Tìm hiểu]</a></span>
                            </div>
                            <div class="info-des clear">
                                <label>Thương Hiệu:&nbsp;Kawai</label><label>Khoảng Giá:&nbsp;Trên 50
                                    triệu</label><label>Thương
                                    Hiệu:&nbsp;Kawai</label><label>Loại Đàn:&nbsp;Grand Piano</label><label>Khoảng
                                    giá:&nbsp;Trên 50 triệu</label>
                            </div>
                            <div class="fx-btn">
                                <a href="javascript:void(0);" onclick="add_list(3105)" class="btn btn-xs btn-primary"
                                    title="So sánh" rel="nofollow">So sánh</a>
                            </div>
                        </figure>
                    </div>
                </li>
            @endif
        @endforeach
    </ul>
</section>
