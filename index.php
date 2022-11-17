<?php
    $textoCompleto = "hbchebc cnjwednc / jdcui/ chauhcuach teste/ teste2 / fsdfasd / dasd / dsa da/ dad sa/ dad s/ dasdd efdef/ s fef/";

    $textoPartido = explode("/",$textoCompleto);

    $x = 1;
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
    <style>
        body{
            background-color: black;
            color: white;
        }

        span{
            color: green;
        }
    </style>
</head>
<body>             for($i = 0; $i < count($textoPartido); $i++){
                if($i%2 == 0){
                    echo $textoPartido[$i];
                }else{
                    echo "<span>".$textoPartido[$i]."</span>";
                }

              

                if($x%4 == 0){
                    echo "<br>";
                }

                $x = $x + 1;
                
            }
        ?>
    </h1>
</body>
</html>