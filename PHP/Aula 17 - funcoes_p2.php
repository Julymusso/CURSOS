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
    $texto = "Juliana Ricato Musso Silva";
    //echo "Seu nome é ".strtolower($texto);  //strtolower: coloca todas as letras em MINÚSCULO
    //echo "Seu nome é ".strtoupper($texto);  //strtolupper: coloca todas as letras em MAIÚSCULO
    //echo"Se nome é ".ucfirst($texto); //ucfrist: coloca apenas a PRIMEIRA letra em MAIÚSCULO
    //echo"Se nome é ".ucwords($texto); //ucwords: coloca a PRIMEIRA letra de cada palavra em MAIÚSCULO
    //echo"Se nome é ao contrário é ".ucwords(strtolower(strrev($texto))); //strrev: Inverte o texto
    
    /*$pos = strpos($texto,"ana"); //strpos: Mostra a posição da string solicitada
    echo "A string ana foi encontrada na posição $pos";*/

    /*$pos = stripos($texto,"ANA"); //strpos: Mostra a posição da string solicitada (maiúscula ou minúscula)
    echo "A string ana foi encontrada na posição $pos";*/

    /*$cont=substr_count($texto,"a"); //substr_count: conta quantas vezes um termo aparece dentro de uma string
    echo "ana foi encontrada $cont vezes";*/

    /*$site = "Curso em Vídeo"; //substr: pega parte de uma string dentro do intervalo determinado
    $sub = substr($site,0,5);
    echo "$sub";*/

    /*$aba = str_repeat($texto,5); //str_repeat: repete os termo solicitados
    echo "$aba";*/

    /*$substituir=str_replace("Silva","Linda",$texto); //str_replace: Substitui um termo por outro. Obs.: str_ireplace "i"=ignore, nesse caso ignora o case sensitive.
    echo $substituir;*/

?>
</div>
</body>
</html>
 