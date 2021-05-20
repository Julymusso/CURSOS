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
    $txt="    Juliana    Ricato Musso    Silva";
    $res=strlen($txt);
    echo("$txt <br/> $res");
    $novo=trim($txt);
    echo("<br/>$novo<br/>"); //Remove os espaços desnecessários
    echo(strlen($novo)); //Remove os espaços desnecessários

?>
</div>
</body>
</html>
 