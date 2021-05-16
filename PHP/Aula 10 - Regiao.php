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
        $sigla = isset($_GET["estados"])?$_GET["estados"]:0;
        switch ($sigla){
            case "RS":
            case "SC":
            case "PR":
                $regiao = "Sul";
                break;
            case "SP":
            case "MG":
            case "RJ":
            case "ES":
                $regiao = "Sudeste";
                break;                
            case "DF":
            case "GO":
            case "MS":
            case "MT":
                $regiao = "Centro-Oeste";
                break;                
            case "AC":
            case "AM":
            case "AP":
            case "PA":
            case "RO":
            case "RR":
            case "TO":
                $regiao = "Norte";
                break;                
            case "AL":
            case "BA":
            case "CE":
            case "MA":
            case "PB":
            case "PE":
            case "PI":
            case "RN":
            case "SE":
                $regiao = "Nordeste";                
        }
        echo "O estado $sigla pertence a região <span class='foco'>$regiao</span>.";

    ?>
    <br/><a href="javascript:history.go(-1)" class="botao">Voltar<a/>
</div>
</body>
</html>