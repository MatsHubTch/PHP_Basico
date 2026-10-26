<?php
date_default_timezone_set("America/Sao_Paulo");

$data = date("d/m/Y");
$hora = date("H:i:s");

$horaAtual = date("H"); // Ex: 14

if ($horaAtual < 12) {
    $saudacao = "Bom dia";
} elseif ($horaAtual >= 12 && $horaAtual < 18) { 
    $saudacao = "Boa tarde";
} else {
    $saudacao = "Boa noite";
}

$mensagem = "Hoje é " . $data . " e agora são " . $hora . ". " . $saudacao . "!";
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Data e hora</title>
</head>
<body>
    <h1>Data e hora do servidor</h1>
    <p><strong><?php echo $mensagem; ?></strong></p>
</body>
</html>
