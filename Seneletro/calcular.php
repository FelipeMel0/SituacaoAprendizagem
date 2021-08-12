<link rel="stylesheet" href="style.css">
<style>
    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100%;
        overflow-y: hidden;
        font-family: 'Roboto Condensed', sans-serif;
        color: white;
        
    }
</style>
<?php

if(isset($_REQUEST["nomeCliente"]) && isset($_REQUEST["endereco"]) && isset($_REQUEST["kwh"])){
    $nomeCliente = $_REQUEST["nomeCliente"];
    $endereco = $_REQUEST["endereco"];
    $kwh = $_REQUEST["kwh"];

    if($kwh > 120){
        $valor = $kwh * 0.42;

        echo "<p style='font-size: 25px; font-weight: bold; margin-bottom: 5px;'>Conta de luz de $nomeCliente</p>";
        echo "<br>";
        echo "<p style='font-size: 15px; margin-bottom: 15px;'>$endereco";
        echo "<p style='font-size: 25px; color: red;'>Consumo: $kwh kWh </p>";
        echo "<br>";
        echo "Valor a pagar: ";
        echo "<p style= 'font-size: 40px'>R$$valor</p>";
        echo "<br>";
    }
    else{
        $valor = $kwh * 0.32;

        echo "<p style='font-size: 25px; font-weight: bold;'>Conta de luz de $nomeCliente</p>";
        echo "<br>";
        echo "<p style='font-size: 15px; margin-bottom: 15px;'>$endereco";
        echo "<p style='font-size: 25px; color: rgb(211, 245, 143);'>Consumo: $kwh kWh </p>";
        echo "<br>";
        echo "Valor a pagar: ";
        echo "<p style= 'font-size: 40px'>R$$valor</p>";
        echo "<br>";
        echo "<p style= 'font-size: 20px'>Obrigado por economizar! *beijo na tua alma*";
    
    }
}