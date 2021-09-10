<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    
    public function index() {
        $products = DB::table('products')
            ->paginate(21);
        
        return view('products/product', ['products' => $products]);
    }

}
