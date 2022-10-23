<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Color;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $colors = Color::all();
        return view ('colors.index', compact('colors'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()

    {
        $brands= Brand::pluck('name', 'id')->toArray();

        return view ('colors.create', compact('brands'));
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
            'code'=> $request->code,
            'brand_id'=>$request->brand_id   

        ]);
        Color::create($data);

        return redirect()
              ->route('colors.index')
              ->withMessage('Added Successfully!');
    
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Color $color)
    {

        return view ('colors.show', compact('color'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
        $brands= Brand::pluck('name', 'id')->toArray();


        return view ('colors.edit', compact('color','brands'));
    }

    public function update(Request $request, Color $color)
    {

        $data=([
            'name'=> $request->name,
            'code'=> $request->code,
            'brand_id'=>$request->brand_id   

        ]);
        $color->update($data);

        return redirect()
              ->route('colors.index')
              ->withMessage('Updated Successfully!');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy (Color $color)
    {

          $color->delete();

        return redirect()
              ->route('colors.index')
              ->withMessage('Deleted Successfully!');
    }

    public function trash()
    {
        $colors = Color::onlyTrashed()->get();
    
        return view ('colors.trash', compact('colors'));
    }

    public function restore($id)
    {
        $colors = Color::onlyTrashed()->find($id);
        $colors->restore();

        return redirect()
        ->route('colors.trash')
        ->withMessage('Successfully Restore!');

    }

    public function delete($id)
    {
        $colors = Color::onlyTrashed()->find($id);
        $colors->forceDelete();
        return redirect()
        ->route('colors.trash')
        ->withMessage('Successfully Deleted!');
    }
    
    public function downloadPdf()
    {
        $colors = Color::all();
        $pdf = Pdf::loadView('colors.pdf', compact('colors'));
        return $pdf->download('color-list.pdf');
    }
}
