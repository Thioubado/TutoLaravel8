<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// appel de la base de donnees
use Illuminate\Support\Facades\DB;

class UsersRestaurant extends Controller
{
    //
     function index(){
        return DB::select('Select * from users');
    }

}
