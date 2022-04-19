<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// appel de la classe Http
use Illuminate\Support\Facades\Http;

class HttpController extends Controller
{
    //
    function index (){
        $collection = Http::get('https://reqres.in/api/users?page=1');

        return view('http', ['collection'=> $collection['data']]);
    }
}
