<style>
    body {
        display: flex;
        align-items: center;
        justify-content: center;
        font-family: 'Roboto Condensed', sans-serif;
        
    }
</style>
<?php
if (isset($_REQUEST["cidadeOrigem"]) && isset($_REQUEST["cidadeDestino"]) && isset ($_REQUEST["quantidadeKm"]) && isset ($_REQUEST["quantidadePedagios"])){
    $cidadeOrigem = $_REQUEST["cidadeOrigem"];
    $cidadeDestino = $_REQUEST["cidadeDestino"];
    $quantidadeKm = $_REQUEST["quantidadeKm"];
    $quantidadePedagios = $_REQUEST["quantidadePedagios"];
    $soma = ($quantidadePedagios * 9.40) + ($quantidadeKm * 6);
    $soma = round($soma, 2);

    echo "<h1>A viagem de $cidadeOrigem para $cidadeDestino irá custar o valor total de R$</h1>";
    echo "<h1 style = 'color: black; font-size: 60px'>$soma</h1>";
} else{
    echo "Você não preencheu os dados corretamente";
}