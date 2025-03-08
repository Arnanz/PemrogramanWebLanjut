<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function profile()
    {
        return view('user.profile', [
            'id' => 05,
            'name' => 'Adnan Arju Maulana Pasha'
        ]);
    }
}