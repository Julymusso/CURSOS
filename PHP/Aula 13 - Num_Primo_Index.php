<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form method="get" action="Aula 13 - Num_Primo.php">
          Número: <select name="number">
              <?php 
                for ($cont=1;$cont<=100;$cont++) {
                    echo "<option name=$cont>$cont</option>";
                }
              ?>
          </select>
          <input type="submit" value="É primo?"/>
    </form>

</div>
</body>
</html>
 