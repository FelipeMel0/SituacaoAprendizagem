<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Roboto Condensed', sans-serif;
        color: white;
        background-color: rgb(255, 173, 20);
        padding: 15px;
    }
</style>
<?php

if (isset($_REQUEST["nome"]) && isset($_REQUEST["salario"]) && isset($_REQUEST["cargos"]) && isset($_REQUEST["opcoes"])) {
    $nome = $_REQUEST["nome"];
    $salario = $_REQUEST["salario"];
    $cargos = $_REQUEST["cargos"];
    $genero = $_REQUEST["opcoes"];

    if ($salario > 5000) {
        $total = $salario * 1.1;
        echo "<h1>A partir de alguns cálculos, $nome passará a receber R$$total, no cargo de $cargos. Aparentemente você também é do gênero '$genero'. Maneiro 👍</h1>";
    } else {
        $total = $salario * 1.2;
        echo "<h1>A partir de alguns cálculos, $nome passará a receber R$$total, no cargo de $cargos. Aparentemente você também é do gênero '$genero'. Maneiro 👍 </h1>";
    }
}
else{
    echo "<h1>Você não preencheu os campos corretamente</h1>";
}
?>
