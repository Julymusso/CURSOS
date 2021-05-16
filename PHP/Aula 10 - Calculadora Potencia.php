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
        $opcao = isset($_GET["op"])?$_GET["op"]:1;
        $numero = isset($_GET["num"])?$_GET["num"]:0;
        switch ($opcao) {
            case 1:
                $resultado = $numero * 2;
                break;
            case 2:
                $resultado = pow($numero,3);
                break;
            case 3:
                $resultado = sqrt($numero);
        }
        echo ("O resulto da operação é <span class='foco'>$resultado</span>");

    ?>

</div>
</body>
</html>