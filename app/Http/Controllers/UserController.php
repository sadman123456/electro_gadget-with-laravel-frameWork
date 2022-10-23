<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['profile'])->latest()->paginate(10);
        return view('users.index', compact('users'));
    }
    public function show(user $user )
    {
        return view ('users.show', compact('user'));
    }

    public function changeRole(user $user )
    {
        $roles=Role::pluck('title','id')->toArray();
        return view ('users.change_role', compact('user','roles'));
    }

    public function updateRole(Request $request,User $user)
    {
        $user->update([
            'role_id'=> $request->role_id
        ]);

        return redirect()->route('users.index')->withMessage('Successfully Update Role');
    }

}
