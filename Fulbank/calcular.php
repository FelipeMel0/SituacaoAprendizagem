<?php

if(isset($_REQUEST["nome"]) && isset($_REQUEST["salario"]) && isset($_REQUEST["cargos"]) && isset($_REQUEST["opcoes"])){
    $nome = $_REQUEST["nome"];
    $salario = $_REQUEST["salario"];
    $cargos = $_REQUEST["cargos"];
    $genero = $_REQUEST["opcoes"];
    
    if($salario > 5000){
        $total = $salario * 110/100;
        echo "<h1>A partir de alguns cálculos, $nome passará a receber R$$total, no cargo de $cargos. Aparentemente você também é do gênero '$genero'. Maneiro 👍</h1>";
    }else{
        $total = $salario * 120/100;
        echo "<h1>A partir de alguns cálculos, $nome passará a receber R$$total, no cargo de $cargos. Aparentemente você também é do gênero '$genero'. Maneiro 👍 </h1>";
    }

} 
