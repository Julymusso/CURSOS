<!DOCTYPE html>
<html>
<head>
    <style>
        span.dif {
            font-weight: bold;
            color: red;
        }
    </style>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
        $nota1 = isset($_GET["n1"])?$_GET["n1"]:0;
        $nota2 = isset($_GET["n2"])?$_GET["n2"]:0;
        $media = ($nota1+$nota2)/2;
        echo "A média entre <span class='dif'>$nota1</span> e <span class='dif'>$nota2</span> é igual a <span class='dif'>$media</span>.<br/>";
        if ($media<5){
            $situacao = "REPROVADO";
        }
        elseif ($media>=5 && $media<7) {
            $situacao = "EM RECUPERAÇÃO";
            }
            else {
                $situacao = "APROVADO";
                }
        echo "Aluno <span class='dif'>$situacao</span>.";
    ?>
    <a href="Aula 9 - Media.html"><button>Voltar</button></a>
</div>
</body>
</html>