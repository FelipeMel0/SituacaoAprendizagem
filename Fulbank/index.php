<?php

//declarando o vetor
$cargos = [
    "Gerente de Produtos",
    "Gerente de Projetos",
    "Desenvolvedor Back-End",
    "Desenvolvedor Front-End",
];

//adicionando um elemento no vetor
$cargos[] = "DBA";
$cargos[] = "Design UI/UX";
$cargos[] = "QA";
$cargos[] = "Engenheiro de Software";
$cargos[] = "Arquiteto";
$cargos[] = "Analista de Sistemas";
$cargos[] = "DevOps";

//excluindo uma posição do vetor
// unset($cargos[0]);


//imprimindo o vetor na tela
// print_r($cargos);

// die;

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Fulbank</title>
</head>

<body>
    <form action="calcular.php">
        <div class="divNome">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" class="inputNome">
        </div>

        <div class="divSalario">
            <label for="salario">Salário:</label>
            <input type="text" name="salario" class="inputSalario">
        </div>

        <div class="divGenero">
            <label for="opcoes">Gênero:</label>

            <input type="radio" name="opcoes" value="Masculino"> Masculino
            <input type="radio" name="opcoes" value="Feminino"> Feminino
            <input type="radio" name="opcoes" value="Outro"> Outro

        </div>

        <div class="divCargo">
            <label for="cargos">Cargo:</label>
            <select name="cargos" id="cargos" class="cargos">
                <option selected disabled>Selecione</option>
                <?php
                    foreach($cargos as $abobrinha){
                        echo "<option>$abobrinha</option>";
                    }
                ?>
            </select>
        </div>

        <button>Enviar</button>
    </form>
</body>

</html>