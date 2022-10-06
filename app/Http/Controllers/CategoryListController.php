<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
=======
use App\Models\Category;
use Illuminate\Http\Request;
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc

class CategoryListController extends Controller
{

    
    public function create()
    {
        return view ('addCategory');
    }
<<<<<<< HEAD
    public function store(CategoryRequest $request)
    {



=======
    public function store(Request $request)
    {
>>>>>>> 5fce14271685b22aa9827a44104ebe5bee3505cc
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
              ->route('admin.categorylist')
              ->withMessage('Updated Successfully!');
    
    }
  

    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        // Session::flash('message', 'Deleted Successfully!');

        // return redirect()
        //       ->route('categories.index')
        //       ->with('message', 'Deleted Successfully!');

        return redirect()
              ->route('admin.categorylist')
              ->withMessage('Deleted Successfully!');
    }


}
