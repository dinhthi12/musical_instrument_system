<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {
        $allCate = Category::with(['children', 'children.children'])
        ->whereNull('parent_id')
        ->get();
        view()->share('allCate',$allCate);
    }

    public function index()
    {

        return view('client.pages.index');
    }
    public function getAllCategories()
    {
        $allCate = Category::with(['children', 'children.children'])
        ->whereNull('parent_id')
        ->get();

    return view('client/partials/_header', ['categories' => $allCate]);
    }
}
