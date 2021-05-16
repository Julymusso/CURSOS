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
      $nascimento = isset($_GET["ano"])?$_GET["ano"]:1900;
      $idade = date("Y") - $nascimento;
      echo "Você nasceu em $nascimento e tem $idade anos. <br/>";
      if ($idade<16){
        echo "Você não pode votar e nem dirigir!";
      }
      elseif ($idade>=16 && $idade<18) {
          echo "Você pode votar mas ainda não pode dirigir!";
        }
        else {
          echo "Parabéns (ou não. srsrs)!!! Você já é obrigado a votar e pode dirigir!";
        }
    ?>
</div>
</body>
</html>
 