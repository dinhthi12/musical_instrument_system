<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Newfeed;
use App\Models\Slide;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class ClientController extends Controller
{
    public function __construct()
    {
        $allCate = Category::with(['children', 'children.children'])
            ->whereNull('parent_id')
            ->get();
        view()->share('allCate', $allCate);

        $allSlide = Slide::where('slide_status', '=', 1)
            ->orderBy('id', 'DESC')
            ->get();
        view()->share('allSlide', $allSlide);

        $allNewFeed = Newfeed::all();
        view()->share('allNewFeed', $allNewFeed);
    }

    public function index()
    {

        return view('client.pages.index');
    }
}
