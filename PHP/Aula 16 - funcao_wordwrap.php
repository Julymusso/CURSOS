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
    $txt="Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad laborum a itaque soluta quisquam, voluptatum maxime cumque pariatur, saepe assumenda distinctio culpa aspernatur delectus! Sit animi dolorem itaque quae distinctio.";
    $res=wordwrap($txt, 40, "<br/>\n", false); //false: gera a quebra por palavra //40: número de caracteres por linha
    echo($res);
?>
</div>
</body>
</html>
 