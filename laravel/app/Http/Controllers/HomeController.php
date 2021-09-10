<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class HomeController extends Controller
{
    public function index(){
        $allMovies =  Movie::all();
        return view('home', compact ('allMovies'));
    }
}


  // 
    //     phpinfo();
    //     $dato1 = "quanti dati";
    //     $dato2 = "quanti dati";
    //     $dato3 = "quanti dati";
    //     $daro4 = "quanti dati";
    //     
    //     );
    // }