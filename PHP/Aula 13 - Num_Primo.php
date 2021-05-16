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
      $num=isset($_GET["number"])?$_GET["number"]:1;
      $eprimo=true;
      $cont=1;
      while ($cont<$num && $eprimo) {
        if ($cont!=1 && $num%$cont==0) {
          $eprimo=false;
          echo "O número $num não é primo!";
        }
        $cont++;
      }
      if ($cont==$num) {
        echo "O número $num é primo!";
      }
    ?>
</div>
</body>
</html>
 