<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
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

    


    public function store(ProductRequest $request)
    {
        //image upload
        // $extension= $request->file('image')->getClientOriginalExtension();
        $orginalName= $request->file('image')->getClientOriginalName();
        $fileName= date('Y-m-d').time().$orginalName;
       $request->file('image')->move( storage_path('/app/public/products/'),$fileName);

    //    dd($request->file('image'));
    //end

        $data=([
            'name'=> $request->name,
            'model'=>$request->brand,

            'sale_price'=> $request->sale_price,
            'purchase_price'=>$request->Purchase_price,

            'description'=> $request->description,
            'category'=>$request->category,
            'quantity'=> $request->quantity,

            'image'=> $fileName
           


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


    public function edit($id)
    
    {
        $categories= Category::all();
        $products= Product::find($id);
        return view ('editproduct', compact('products' ,'categories'));
    }

    public function update(Request $request, $id)
    {
   //image upload
        // $extension= $request->file('image')->getClientOriginalExtension();
        $orginalName= $request->file('image')->getClientOriginalName();
        $fileName= date('Y-m-d').time().$orginalName;
       $request->file('image')->move( storage_path('/app/public/products/'),$fileName);

    //    dd($request->file('image'));
    //end
        $products= Product::find($id);

        $data=([
            'name'=> $request->name,
            'model'=>$request->brand,

            'sale_price'=> $request->sale_price,
            'purchase_price'=>$request->Purchase_price,

            'description'=> $request->description,
            'category'=>$request->category,
            'quantity'=> $request->quantity,

            'image'=> $fileName,
           


        ]);
        
        $products->update($data);

        return redirect()
              ->route('admin.productlist')
              ->withMessage('Update Successfully!');
    
    }


}
