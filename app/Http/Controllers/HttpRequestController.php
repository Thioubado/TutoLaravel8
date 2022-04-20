<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HttpRequestController extends Controller
{
    //
    function testRequest(Request $req)
    {
        return $req->input();
    }
}
