<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category_translations;
use App\Models\Newfeeds_translations;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


class ClientController extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $allCate = Category_translations::with(['children', 'children.children'])
            ->whereNull('parent_id')
            ->where('locale', app()->getLocale())
            ->get();
        $allNewsFeed = Newfeeds_translations::where('locale', app()->getLocale())
            ->latest('created_at') // Sắp xếp theo ngày tạo mới nhất
            ->take(4)              // Lấy 4 tin tức
            ->get();
        return view('client.pages.index', ['allCate' => $allCate, 'allNewsFeed' => $allNewsFeed]);
    }
}
