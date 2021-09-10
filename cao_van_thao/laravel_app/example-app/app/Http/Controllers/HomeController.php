<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function index() {
        $products = DB::table('products')
            ->where('is_public', config('product.public'))
            ->orderBy('sale_off', 'DESC')
            ->orderBy('price', 'DESC')
            ->paginate(6);  
        //$test = DB::table('products')
            //->where('id',10)
            //->update(['sale_off' => 0]);  
        //$test = DB::table('products')->find(10);  
         //dd($test);



        return view('home-page', ['products' => $products]);
    }
}