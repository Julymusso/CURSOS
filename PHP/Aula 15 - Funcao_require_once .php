<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
<?php
    require_once "Aula 14 - all_functions.php"; //Caso não encontre o arquivo requerido, para de rodar o programa nesse ponto //Once: Se já tiver carregado o arquivo anteiormente, não e necessário carregar novamente.
    echo "<h1>Testando Novas Funções</h1>";
    ola();
    mostrarValor(4);
    echo"<p>Finalizando o Programa...<p>";
    
?>  
</div>
</body>
</html>
 