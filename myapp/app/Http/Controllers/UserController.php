<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        // dd("{$request->q}", '{$request->q}');

        if (empty($request->q)) {
            $users = User::paginate(5);
        } else {
            $users = User::where('name', 'LIKE', "%{$request->q}%")
                    ->orWhere("email", 'LIKE', "%{$request->q}%")
                    ->paginate(5);
        }
        return view('users', [
            'users' => $users,
        ]);
    }




    public function show(User $user)
    {
        return view('user', [
            'name' => 'diego',
            'user' => $user,

        ]);
    }


}
