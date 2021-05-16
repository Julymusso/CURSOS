<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="Aula 11 - Criar Formulario.php">
    
    <?php
        $n = 1;
        while ($n<=5) {
            echo"Valor $n: <input type='number' name='v$n' max='100' min='0' value='0'/><br/>";
            $n++;
        }
        ?>    
        <input type="submit" value="Enviar" class="botao"/>
    </form>

    <br/><a href="javascript:history.go(-1)" class="botao">Voltar<a/>
</div>
</body>
</html>