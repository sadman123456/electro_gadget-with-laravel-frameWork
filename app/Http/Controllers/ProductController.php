<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
// use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Image;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    
    {
        $products = Product::latest()->paginate(10);

        return view ('products.index', compact('products'));
    }

    public function create()
    {

        $categories= Category::pluck('name', 'id')->toArray();
        $brands= Brand::pluck('name', 'id')->toArray();
        $colors = Color::pluck('name', 'id')->toArray();

        return view ('products.create', compact('categories','brands', 'colors'));   
    }

    
    public function store(ProductRequest $request )
    {
 
     $fileName= $this->uploadImage($request->file('image'));
        $data=([
            'name'=> $request->name,
            'brand_id'=>$request->brand_id,

            'sale_price'=> $request->sale_price,
            'purchase_price'=>$request->Purchase_price,

            'description'=> $request->description,
            'category_id'=>$request->category_id,
            'quantity'=> $request->quantity,

            'image'=> $fileName,
            'is_active' => $request->is_active ? true : false,
        ]);
        
        $product = Product::create($data);

        $product->images()->create(
            [
                'image'=> $this->uploadImage($request->file('image')),
                'upload_by'=> Auth::id ()
            ]
       );

        $product->colors()->attach($request->colors);
        
        return redirect()
              ->route('product.index')
              ->withMessage('Added Successfully!');
    
    }

    public function show(Product $product )
    {
        // $products= Product::find($id);

        return view ('products.show', compact('product'));
    }



    public function edit(Product $product)
    
    {
        $brands= Brand::pluck('name', 'id')->toArray();

        $categories= Category::pluck('name', 'id');
        $colors = Color::pluck('name', 'id')->toArray();
       $selectedColors= $product->colors()->pluck('id')->toArray();
        // $products= Product::find($id);
        return view ('products.edit', compact('product' ,'categories','colors','selectedColors','brands'));
    }

    public function update(ProductRequest $request, Product $product)
    {
           //image upload

        //    if($request->hasFile('image')){
        //     $fileName= $this->uploadImage($request->file('image'));
        //        }


    //    dd($request->file('image'));
    //end
        // $products= Product::find($id);

        $data=([
            'name'=> $request->name,
            'brand_id'=>$request->brand_id,

            'sale_price'=> $request->sale_price,
            'purchase_price'=>$request->Purchase_price,

            'description'=> $request->description,
            'category_id'=>$request->category,
            'quantity'=> $request->quantity,
            'is_active' => $request->is_active ? true : false,

            // 'image'=> $fileName ?? $products->image,
           


        ]);

        if($request->hasFile('image')){
            $data['image']= $this->uploadImage($request->file('image'));
               }

        $product->update($data);
        $product->colors()->sync($request->colors);


        return redirect()
              ->route('product.index')
              ->withMessage('Update Successfully!');
    
    }
    
    public function destroy(Product $product)
    {
        // $Product= Product::find($id);
        $product->delete();

        // Session::flash('message', 'Deleted Successfully!');

        // return redirect()
        //       ->route('categories.index')
        //       ->with('message', 'Deleted Successfully!');

        return redirect()
              ->route('product.index')
              ->withmMessage('Deleted Successfully!');
    }

    public function trash()
    {
        $products = Product::onlyTrashed()->get();
        $categories= Category::pluck('name', 'id');
        return view ('products.trash', compact('products','categories'));
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
        $products->colors()->detach();
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

    public function downloadPdf()
    {
        $products = Product::all();
        $pdf = Pdf::loadView('products.pdf', compact('products'));
        return $pdf->download('product-list.pdf');
    }



}
