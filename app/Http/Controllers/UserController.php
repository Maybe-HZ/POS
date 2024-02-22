<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showUser($id, $name)
    {
        return view('user.profile', ['id' => $id, 'name' => $name]);
    }
}
