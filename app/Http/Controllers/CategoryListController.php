<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryListController extends Controller
{
    public function categorylist()
    {
        return view ('categorylist');
    }
}
