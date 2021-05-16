<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <h1>Incremetos</h1>
    <?php
    $anoatual = $_GET["aa"];
    echo "O ano atual é $anoatual e o ano anterior é ". --$anoatual;
    
    ?>
</div>
</body>
</html>
 