<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class FrontController extends Controller
{
    public function index() {
        $products = config('produtos');
        return view('front.index', compact('products'));
    }
}
