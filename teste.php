<?php
// exercicio 1
// $num=10;

//   echo "o numero é $num";
 
   
// exercicio2
//    $nome1= "Igor";
//    $nome2="Rodolfo";
//    $idade1=16;
//    $idade2=18;

//    $resultado = $idade1+$idade2;
//    echo "A soma das idades é $resultado"
   


//  exercicio 3
//    $nome1= "Igor";
//    $nome2="Rodolfo";
//    $idade1=16;
//    $idade2=18;

//    $resultado = $idade1+$idade2;
//    echo "A soma das idades de $nome1 e $nome2 é $resultado";
   

// exercicio 4
// $numA=10;
//    $numB=30;
//    $numC=$numA;
//    $numA=$numB;
//    $numB=$numC;

//    echo $numA,$numB;
 

// exercicios 5
// $numA = 20;
// $numB = 10;
// $numC = 2;

// echo ($numA-$numB)*$numC;


// exercicio 6
// $calor = 180;

// $centigrado = ((($calor-32)*5)/9);
// echo $centigrado;


// exercicio 7
// $irma = 520;
// $gasolina = 12;
// $preco = 1.50;

// $valorTotal = (($irma*$gasolina)*$preco);

// echo $valorTotal;


//exercicio 8

$total = 6500;
$horas = floor($total / 3600);
$minutos = floor(($total - ($horas * 3600)) / 60);
$segundos = floor($total % 60);
echo $horas . ":" . $minutos . ":" . $segundos;


?>