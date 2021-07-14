<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumController extends Controller
{
    
 //
 public function index()
 {
     
    $valores = array();
    $max_num = 10;

    for ($x=0;$x<$max_num;$x++) {

        $num_aleatorio = rand(1,100);
        array_push($valores,$num_aleatorio);
    }
    var_dump ($valores);

 }

}

