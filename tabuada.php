<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .verde 
        {
            background-color:green;
        }
        .amarelo 
        {
            background-color:yellow;
        }
    </style>
</head>
<body>
    <?php
    $valor = $_GET["valor"];
    for($x=1;$x<=10;$x++)
    { 
    if ($x%2 == 0)
    {
     echo ("<div class='verde'>"); 
    }
    else
    {
        echo ("<div class='amarelo'>"); 
    }
    echo (5*$x);
    echo ("</div> <br>");
   }
    ?>
</body>
</html>