<?php

if(isset($_REQUEST["nome"]) && isset($_REQUEST["salario"]) && isset($_REQUEST["cargos"])){
    $nome = $_REQUEST["nome"];
    $salario = $_REQUEST["salario"];
    $cargos = $_REQUEST["cargos"];
    
   
    if($salario > 5000){
        $total = $salario * 110/100;
        echo "<h1>O $nome passará a receber R$$total, no cargo de $cargos</h1>";
    }else{
        $total = $salario * 120/100;
        echo "<h1>O $nome passará a receber R$$total, no cargo de $cargos </h1>";
    }

}