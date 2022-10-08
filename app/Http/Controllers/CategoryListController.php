<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryListController extends Controller
{

    
    public function create()
    {
        return view ('addCategory');
    }
    
    public function store(CategoryRequest $request)
    {



        $data=([
            'name'=> $request->name,
            'description'=>$request->description

        ]);
        Category::create($data);

        return redirect()
              ->route('admin.categorylist')
              ->withMessage('Added Successfully!');
    
    }

    public function index()
    {
        $categories = Category::all();
        return view ('categorylist', compact('categories'));
    }

    public function editCategory($id)
    {
        $categories = Category::find($id);

        return view ('editCategory', compact('categories'));
    }

    public function update(Request $request, $id)
    {
        $categories = Category::find($id);

        $data=([
            'name'=> $request->name,
            'description'=>$request->description

        ]);
        $categories->update($data);

        return redirect()
              ->route('category.index')
              ->withMessage('Updated Successfully!');
    
    }
  

    public function destroy ($id)
    {
          $category = Category::find($id);

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
    
        return view ('trash_categories', compact('categories'));
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
