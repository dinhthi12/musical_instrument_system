<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function __construct()
    {}

    public function index()
    {

        return view('client.pages.index');
    }
}
