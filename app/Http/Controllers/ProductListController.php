<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view ('productList', compact('products'));
    }

    public function destroy($id)
    {
        $Product= Product::find($id);
        $Product->delete();

        // Session::flash('message', 'Deleted Successfully!');

        // return redirect()
        //       ->route('categories.index')
        //       ->with('message', 'Deleted Successfully!');

        return redirect()
              ->route('admin.productlist')
              ->withmMessage('Deleted Successfully!');
    }

}
