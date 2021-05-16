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
        $dia = isset($_GET["op"])?$_GET["op"]:0;
        switch ($dia){
            case 2:
            case 3:
            case 4:
            case 5:
            case 6:
                echo "Bora trabalhar que dinheiro não cai lieteralmente do céu!!!";
                break;
            case 7: 
            case 1:
                echo "Finds chegou! Pode descansar que a semana tá paga e você merece!";
        }

    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">Voltar<a/>
</div>
</body>
</html>