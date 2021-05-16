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
        $start = isset($_GET["str"])?$_GET["str"]:0;
        $end = isset($_GET["end"])?$_GET["end"]:0;
        $add = isset($_GET["inc"])?$_GET["inc"]:0;

        while ($start < $end) {
            $start=$start+$add;
            echo "$start "; 
        }
        while ($start > $end) {
            $start=$start-$add;
            echo "$start ";
        }
    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">Voltar<a/>
</div>
</body>
</html>