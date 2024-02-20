<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Newfeed;
use App\Models\Product;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        // Kiểm tra xem dữ liệu đã được lưu trữ trong Redis hay chưa
        $allCate = Redis::get('allCate');
        $allNewsFeed = Redis::get('allNewsFeed');
        $outstandingProduct = Redis::get('outstandingProduct');
        $guitarProduct = Redis::get('guitarProduct');

        // Nếu không có dữ liệu trong Redis, thực hiện truy vấn CSDL
        if (!$guitarProduct) {
            $guitarProduct = Product::where('category_id', 19)
                ->take(8)
                ->get();

            // Lưu trữ dữ liệu vào Redis với thời gian sống là 3600 giây (1 giờ)
            Redis::setex('guitarProduct', 10, json_encode($guitarProduct));
        } else {
            $guitarProduct = json_decode($guitarProduct, true); // Chuyển đổi chuỗi JSON thành mảng
        }

        if (!$outstandingProduct) {
            $outstandingProduct = Product::where('product_status', 0)
                ->take(8)
                ->get();

            // Lưu trữ dữ liệu vào Redis với thời gian sống là 3600 giây (1 giờ)
            Redis::setex('outstandingProduct', 10, json_encode($outstandingProduct));
        } else {
            $outstandingProduct = json_decode($outstandingProduct, true); // Chuyển đổi chuỗi JSON thành mảng
        }

        if (!$allCate) {
            $allCate = Category::with(['children', 'children.children'])
                ->whereNull('parent_id')
                ->get();


            Redis::setex('allCate', 10, json_encode($allCate));
        } else {
            $allCate = json_decode($allCate, true);
        }

        if (!$allNewsFeed) {
            $allNewsFeed = Newfeed::latest('created_at')
                ->take(4)
                ->get();

            Redis::setex('allNewsFeed', 10, json_encode($allNewsFeed));
        } else {
            $allNewsFeed = json_decode($allNewsFeed, true);
        }

        return view('client.pages.index', [
            'allCate' => $allCate,
            'allNewsFeed' => $allNewsFeed,
            'outstandingProduct' => $outstandingProduct,
            'guitarProduct' => $guitarProduct
        ]);
    }
}
