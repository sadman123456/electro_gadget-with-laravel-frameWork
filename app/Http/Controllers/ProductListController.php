<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view ('productList', compact('products'));
    }

    public function create()
    {
        {
            $categories= Category::all();

            return view ('addproduct', compact('categories'));
        }
    }

    public function store(Request $request)
    {
        $data=([
            'name'=> $request->name,
            'model'=>$request->brand,

            'sale_price'=> $request->sale_price,
            'purchase_price'=>$request->Purchase_price,

            'description'=> $request->description,
            'category'=>$request->category,
            'quantity'=> $request->quantity,

            'image'=> $request->image,
           


        ]);
        
        Product::create($data);

        return redirect()
              ->route('admin.productlist')
              ->withMessage('Added Successfully!');
    
    }

    public function show($id)
    {
        $products= Product::find($id);

        return view ('productview', compact('products'));
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
