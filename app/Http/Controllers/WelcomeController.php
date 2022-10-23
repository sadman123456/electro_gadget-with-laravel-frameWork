<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function welcome()
    {
        if($keyword = request('keyword')){
            $products = Product::latest()
                                ->where('name', 'LIKE', "%{$keyword}%")
                                ->paginate(6);
        }else{
            $products = Product::latest()->paginate(6);
        }

        $categories=Category::all();
        return view('welcome', compact('products','categories'));
    }

    public function productList(Category $category)
    {
        return view('products', compact('category'));
    }

    public function productDetails(Product $product)
    {
        return view('product', compact('product'));
    }
}

