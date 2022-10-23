<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{

    
    public function create()
    {
        return view ('categories.create');
    }
    
    public function store(CategoryRequest $request)
    {



        $data=([
            'name'=> $request->name,
            'description'=>$request->description

        ]);
        Category::create($data);

        return redirect()
              ->route('category.index')
              ->withMessage('Added Successfully!');
    
    }

    public function index()
    {
        $category = Category::latest()->paginate(10);

        return view ('categories.index', compact('category'));
    }

    public function edit(Category $category)
    {
        // $categories = Category::find($id);

        return view ('categories.edit', compact('category'));
    }

    public function update(Request $request, Category $category )
    {
        // $categories = Category::find($id);

        $data=([
            'name'=> $request->name,
            'description'=>$request->description

        ]);
        $category->update($data);

        return redirect()
              ->route('category.index')
              ->withMessage('Updated Successfully!');
    
    }
    public function show(Category $category)
    {
        // $products= Product::find($id);

        return view ('categories.show', compact('category'));
    }

  

    public function destroy (Category $category)
    {
        //   $category = Category::find($id);

          $category->delete();

          // Session::flash('message', 'Successfully deleted');
          // return redirect()
          //         ->route('categories.index')
          //         ->with('message', 'Successfully deleted');
  
        return redirect()
              ->route('category.index')
              ->withMessage('Deleted Successfully!');
    }


    public function trash()
    {
        $categories = Category::onlyTrashed()->get();
    
        return view ('categories.trash', compact('categories'));
    }

    public function restore($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->restore();

        return redirect()
        ->route('category.trash')
        ->withMessage('Successfully Restore!');

    }

    public function delete($id)
    {
        $category = Category::onlyTrashed()->find($id);
        $category->forceDelete();
        return redirect()
        ->route('category.trash')
        ->withMessage('Successfully Deleted!');
    }

}
