<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class users extends Controller
{
    //
    
    public function index ($user) {
        //pour que la page s'affiche, il faut mettre dans l'URL le parametre userm c-a-d 'momo'
        echo $user;
        echo ' Hello from controller';
    }
}
