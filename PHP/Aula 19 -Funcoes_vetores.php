<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <pre>
        <?php
            $vetor=array(1,2,5,5,9,8,1,3);
            //var_dump($vetor); mostra a posição, o valor e o tipo.
            //array_push($vetor,5): coloca um valor na ultima posição do vetor
            //array_pop($vetor): remove a ultima posição do vetor
            //array_unshift($vetor): adiciona valor a primeira posição e reloca as demais
            //array_shitf($vetor): remove o valor primeira posição e reloca os demais
            //sort($vetor); //coloca o vetor em ordem. Troca apenas os valores
            //rsort($vetor): ordenação reversa. Troca apenas os valores
            //asort($vetor): ordenação com troca de valores e índices
            //ksort($vetor): ordenar indice ou chaves (no caso quando nomeio os campos). tipo key da biblioteca em python.
            //arsrot($vetor): ordenação reversa com troca de valores e índices.
            //krsort($vetor): ordenar reversa de indice ou chaves (no caso quando nomeio os campos). tipo key da biblioteca em python.
            print_r($vetor);
        ?>
    </pre>  
</div>
</body>
</html>
 