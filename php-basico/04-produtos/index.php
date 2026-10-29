<?php
$produtos = [
    ["nome" => "ASUS ROG Astral RTX 5090 Real Gold Edition", "preco" => 2.99, "estoque" => 1],
    ["nome" => "casinha de brinquedo da peppa-pig", "preco" => 1000000.99, "estoque" => 22],
    ["nome" => "Cabo HDMI comum de 1 metro", "preco" => 15.00, "estoque" => 10], 
    ["nome" => "Antimateria", "preco" => 2.00 , "estoque" => 0], 
];
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Lista de Produtos</title>
</head>
<body>

    <table border="1" cellpadding="6">
      <thead>
        <tr>
            <th>Produto</th>
            <th>Preço</th>
            <th>Estoque</th>
            <th>Situação</th> 
        </tr>
      </thead>
      <tbody>
      <?php foreach ($produtos as $item): ?>
        <tr>
          <td><?= htmlspecialchars($item["nome"]) ?></td>
          <td>R$ <?= number_format($item["preco"], 2, ",", ".") ?></td>
          <td><?= $item["estoque"] ?> unidades</td>
          
          <td><?= $item["estoque"] > 0 ? "Disponível" : "Esgotado" ?></td>
        </tr>
      <?php endforeach; ?>
      </tbody>
    </table>

</body>
</html>
