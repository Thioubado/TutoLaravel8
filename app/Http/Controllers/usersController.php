<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    //
    function loadView() {
        return view('users', ['name'=> 'Momo SECK']);
    }
}
