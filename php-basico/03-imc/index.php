<?php
$peso = "";
$altura = "";
$imcFormatado = "--";
$classe = "";
$erro = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $peso = $_POST['campo_peso'];  
    $altura = $_POST['campo_altura']; 

    if ($peso <= 0 || $altura <= 0) {
        $erro = "Informe peso e altura maiores que zero.";
    } else {
        $imc = $peso / ($altura * $altura);
        $imcFormatado = number_format($imc, 2, ",", ".");

        if ($imc < 18.5) {
            $classe = "Abaixo do peso";
        } elseif ($imc < 25) {
            $classe = "Peso normal";
        } elseif ($imc < 30) {
            $classe = "Sobrepeso";
        } elseif ($imc < 35) {
            $classe = "Obesidade Grau I";
        } elseif ($imc < 40) {
            $classe = "Obesidade Grau II";
        } else {
            $classe = "Obesidade Grau III (Tu vai murrê pae)";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Calculadora de IMC</title>
</head>
<body>
    <h1>Calculadora de IMC</h1>

    <form method="POST" action="">
        <p>Peso (kg): <input type="number" step="0.1" name="campo_peso" required></p>
        <p>Altura (m): <input type="number" step="0.01" name="campo_altura" required></p>
        <button type="submit">Calcular</button>
    </form>

    <?php if (!empty($erro)): ?>
        <p style="color: red; font-weight: bold;"><?= $erro ?></p>
    <?php endif; ?>

    <p>IMC: <strong><?= $imcFormatado ?></strong></p>
    <p>Classificação: <strong><?= $classe ?></strong></p>
</body>
</html>
