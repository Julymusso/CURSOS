<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h1>Votação</h1>
    <?php
    $nascimento = $_GET["a"];
    $anoatual = $_GET["b"];
    echo "A idade de fulando em $anoatual é ".($anoatual-$nascimento)."<br/>";
    echo (($anoatual-$nascimento)>=18 && ($anoatual-$nascimento)<=65 ?"Voto Obrigatório" : "Voto Opcional");
    ?>
</div>
</body>
</html>
 