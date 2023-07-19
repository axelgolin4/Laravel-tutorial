<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('user.index', ["users" => $users]);
    }

    public function create()
    {
        $user = new User;
        $user -> name = "John Doe";
        $user -> email = "example@correo.com";
        $user -> password = bcrypt("12345678");
        $user -> age = 20;
        $user -> address = "Calle 123";
        $user -> zip_code = 12345;
        $user -> save();

        return redirect() ->route('user.index');
    }
}
