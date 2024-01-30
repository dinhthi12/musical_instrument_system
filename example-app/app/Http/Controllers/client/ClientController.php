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
        $allNewsFeed = Newfeeds_translations::all()->where('locale', app()->getLocale());
        return view('client.pages.index', ['allCate' => $allCate, 'allNewsFeed' => $allNewsFeed]);
    }
}
