<?php

$PwLength = $_GET["number"];

$allowed = ["q", "w", "e", "r", "t", "y", "u", "i", "o", "p", "a", "s", "d", "g", "h", "j", "k", "l", "z", "x", "c", "v", "b", "n", "m", "Q", "W", "E", "R", "T", "Y", "U", "I", "O", "P", "A", "S", "D", "F", "G", "H", "J", "K", "L"];

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
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <form action="elabora.php" method="GET">


        <input type="number" name="number" placeholder="select the length of your password">

        <button type="submit">invia</button>

    </form>

    <h1><?php echo "Hai richioesto una password lunga " . $PwLength . " caratteri" ?></h1>
    <h2><?php echo "La tua password" ?></h2>

    <?php



    for ($count = 0; $count < $PwLength-1; ++$count) {

        echo $allowed[rand(0, count($allowed)-1)];
    }

    ?>


    <h2><?php echo "password che comprende anche numeri" ?></h2>
    <?php
    for ($count = 0; $count < $PwLength / 2; ++$count) {

         echo rand(0, 8);


        echo $allowed[rand(0, count($allowed))];
    }
    ?>
</body>

</html>