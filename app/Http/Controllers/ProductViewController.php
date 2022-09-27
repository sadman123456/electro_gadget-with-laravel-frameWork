<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductViewController extends Controller
{
    public function productView()
    {
        return view ('productView');
    }
}
