<?php
$nome  = "Mateus";
$curso = "Técnico em Informática";
?>
<!DOCTYPE html>
...
  <p>Meu nome é <?= $nome ?>.</p>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hello World em PHP</title>
</head>
<body>
  <h1><?php echo "Hello, World!"; ?></h1>
 
  <p>Meu nome é <?php echo $nome ?>.</p>
  <p>Estou aprendendo PHP no curso <?php echo $curso ?>.</p>



  <p>Meu nome é <?php echo $nome ?>.</p>
  <p>Meu nome é <?php print $nome ?>.</p>

  <p>Meu nome é <?php echo '$nome' ?>.</p>
  <p>Meu nome é <?php echo "$nome" ?>.</p>
</body>
</html>

