<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Category;

class HomeController extends Controller
{
    public function index()
    {
        $products = DB::table('products')
            ->where('is_public', config('product.public'))
            ->orderBy('sale_off', 'DESC')
            ->orderBy('price', 'DESC')
            ->paginate(config('product.paginate'));

        $categories = Category::where('is_public', config('category.public'))
            ->get();

        return view('home-page', [
            'products' => $products,
            'categories' => $categories,
        ]);
    }
}
