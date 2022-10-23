<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::latest()->paginate(10);

        return view ('brands.index', compact('brands'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data=([
            'name'=> $request->name,
            'description'=>$request->description

        ]);
        Brand::create($data);

        return redirect()
              ->route('brands.index')
              ->withMessage('Added Successfully!');
    
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {

        return view ('brands.show', compact('brand'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {

        return view ('brands.edit', compact('brand'));
    }

    public function update(Request $request, Brand $brand)
    {

        $data=([
            'name'=> $request->name,
            'description'=>$request->description

        ]);
        $brand->update($data);

        return redirect()
              ->route('brands.index')
              ->withMessage('Updated Successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy (Brand $brand)
    {

          $brand->delete();

        return redirect()
              ->route('brands.index')
              ->withMessage('Deleted Successfully!');
    }

    public function trash()
    {
        $brands = Brand::onlyTrashed()->get();
    
        return view ('brands.trash', compact('brands'));
    }

    public function restore($id)
    {
        $brands = Brand::onlyTrashed()->find($id);
        $brands->restore();

        return redirect()
        ->route('brands.trash')
        ->withMessage('Successfully Restore!');

    }

    public function delete($id)
    {
        $brands = Brand::onlyTrashed()->find($id);
        $brands->forceDelete();
        return redirect()
        ->route('brands.trash')
        ->withMessage('Successfully Deleted!');
    }
}
