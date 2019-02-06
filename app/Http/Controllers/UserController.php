<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $users = User::paginate(15);

        return view('users.users', ['users' => $users]);
    }
}
