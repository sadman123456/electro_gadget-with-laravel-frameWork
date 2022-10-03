<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditProductController extends Controller
{
    public function editProduct()
    {
        return view ('editProduct');
    }
}
