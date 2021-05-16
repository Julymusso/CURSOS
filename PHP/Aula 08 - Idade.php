<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h1>Formulários</h1>
    <?php
        $nome=isset($_GET["nome"])?$_GET["nome"]:"Não informado";
        $nascimento=isset($_GET["ano"])?$_GET["ano"]:date("Y");
        $sexo=isset($_GET["sexo"])?$_GET["sexo"]:"Sexo não informado";
        $idade=date("Y") - $nascimento;
        echo "$nome é $sexo e tem $idade anos";

    ?>
</div>
</body>
</html>
 