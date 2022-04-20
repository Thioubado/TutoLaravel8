<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //
    function userAuth(Request $req)
    {
        $data = $req->input();

        $req->session()->put('user', $data['user']);
        return redirect('profile');
    }
}
