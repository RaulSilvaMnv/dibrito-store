<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ProdutosController extends Controller
{
    public function produtos($id)
    {
        $products = collect(config('produtos'));
        $product = $products->firstWhere('id', $id);

        if(!$product){
            abort(400);
        }

        return view('front.produtos-index', compact('product'));
    }
}