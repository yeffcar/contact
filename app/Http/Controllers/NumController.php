<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumController extends Controller
{
    
 //
 public function index()
 {    

    //CREANDO ALEATORIOS
    $valores = array();
    $max_num = 10;

    for ($x=0;$x<$max_num;$x++) {

        $num_aleatorio = rand(1,100);
        array_push($valores,$num_aleatorio);
    }
    echo "10 Aleatorios";
    echo "<br/>";
    var_dump ($valores);
    echo "<br/>";


    //VALORES IMPARES
    $impares = array_filter($valores, function ($var)
    {
        // Retorna siempre que el número entero sea impar
        return($var & 1);
    });

    echo "Impares";
    echo "<br/>";
    var_dump($impares);
    echo "<br/>";

    //ELEVAR AL CUBO
    $cubo = array_map( function ($n)
    {
        return($n * $n * $n);

    }, $valores);

    echo "Cubo";
    echo "<br/>";
    var_dump($cubo);
    echo "<br/>";
   
    //ORDENAR DE MENOR A MAYOR
    asort($cubo);
    echo "MENOR A MAYOR";
    echo "<br/>";
    foreach ($cubo as $key => $val) {
        echo "$key = $val\n";
    }

 }

}

