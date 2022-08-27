<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function register()
    {
        return view('login.register', [
            'post' => 'hello'
        ]);
    }

    public function registerUser(Request $req)
    {
        $user = new User();

        $user->name     = $req->name;
        $user->username = $req->username;
        $user->photo    = $req->photo;
        $user->email    = $req->email;
        $user->password = bcrypt($req->password);

        $user->save();

        return redirect('/register')->with('message', 'Registration Successful!!');
    }
}
