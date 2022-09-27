<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AddCategoryController extends Controller
{
    public function addCategory()
    {
        return view ('addCategory');
    }
}
