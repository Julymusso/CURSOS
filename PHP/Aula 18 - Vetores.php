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
            //$vetor = array(1,2,5,3,6,4,8,9,10);
            //$vetor=range(0,20,5);
            //print_r($vetor);
            //unset($vetor[1]);
            
            /*foreach($vetor as $valor) {
                echo "$valor ";
            }*/
           
            $cadastro = array("nome"=>"Julia", "idade"=>30, "peso"=>86.5);
            foreach($cadastro as $campo=>$valor){
                echo "$campo é $valor <br/>";
            }
            
        ?>
    </pre>  
</div>
</body>
</html>
 