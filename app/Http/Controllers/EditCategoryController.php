<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditCategoryController extends Controller
{
    public function editCategory()
    {
        return view ('editCategory');
    }
}
