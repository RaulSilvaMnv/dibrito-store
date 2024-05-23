<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProdutosController extends Controller
{
    public function ternos() {
        return view('front.ternos-index');
    }
}
