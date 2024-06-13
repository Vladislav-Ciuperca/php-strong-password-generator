<?php

$length = $_GET["number"];

$valore = "cioa ";
$balore = "bello ";

function prova($arg1, $arg2)
{
    echo $arg1;
    echo $arg2;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1><?php echo $length ?></h1>

    <h2><?php prova($valore, $balore) ?></h2>

</body>

</html>