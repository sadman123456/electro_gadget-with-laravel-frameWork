<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditUserController extends Controller
{
    public function editUser()
    {
        return view ('editUser');
    }
}
