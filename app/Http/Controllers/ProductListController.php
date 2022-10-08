<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Image;

class ProductListController extends Controller
{
    public function index()
    {
        $products = Product::all();
        $categories= Category::pluck('name', 'id');
        return view ('productList', compact('products','categories'));
    }

    public function create()
    {
        $categories= Category::pluck('name', 'id')->toArray();
        return view ('addproduct', compact('categories'));   
    }

    
    public function store(ProductRequest $request)
    {
 
     $fileName= $this->uploadImage($request->file('image'));
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



    public function edit($id)
    
    {
        $categories= Category::pluck('name', 'id');
        $products= Product::find($id);
        return view ('editproduct', compact('products' ,'categories'));
    }

    public function update(ProductRequest $request, $id)
    {
           //image upload

        //    if($request->hasFile('image')){
        //     $fileName= $this->uploadImage($request->file('image'));
        //        }


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

            // 'image'=> $fileName ?? $products->image,
           


        ]);

        if($request->hasFile('image')){
            $data['image']= $this->uploadImage($request->file('image'));
               }

        $products->update($data);

        return redirect()
              ->route('admin.productlist')
              ->withMessage('Update Successfully!');
    
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

    public function trash()
    {
        $products = Product::onlyTrashed()->get();
        $categories= Category::pluck('name', 'id');
        return view ('product_trash', compact('products','categories'));
    }

    public function restore($id)
    {
        $products = Product::onlyTrashed()->find($id);
        $products->restore();

        return redirect()
        ->route('product.trash')
        ->withMessage('Successfully Restore!');

    }
    public function delete($id)
    {
        $products = Product::onlyTrashed()->find($id);
        $products->forceDelete();

        return redirect()
        ->route('product.trash')
        ->withMessage('Successfully Deleted!');

    }
    public function uploadImage($image){
       //image upload
        // $extension= $request->file('image')->getClientOriginalExtension();
        // $orginalName= $request->file('image')->getClientOriginalName();

        $orginalName= $image->getClientOriginalName();
        $fileName= date('Y-m-d').time().$orginalName;
    //    $image->move( storage_path('/app/public/products/'),$fileName);

    Image::make($image)
    ->resize(200,200)
    ->save(storage_path() .'/app/public/products/'.$fileName);
       return $fileName;

    //    dd($request->file('image'));
    //end
    }


}
