<?php

$citazioneZeroCalcare = "Sono l'anello che si fa i cazzi suoi nella catena alimentare.
                        ― Zerocalcare, Dimentica il mio nome";   

$citazioneArmadillo = "Sì te vai con la macchina, io te raggiungo cor coso... Come si chiama...Er coso dai...Ah Sì! Te raggiungo cor cazzo.
                        - Armadillo, la coscienza di Zerocalcare";

$titolo = "Scuola By ZeroCalcare e l'Armadillo parlante";


$censuraParola = $_GET["censura"];
//$_GET["cazz"];

$fraseCensurataArmadillo = str_replace($censuraParola, "***", $citazioneArmadillo);
$fraseCensurataZerocalcare = str_replace($censuraParola, "***", $citazioneZeroCalcare);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Citazioni importanti</title>
</head>
<body>
    <div class="container" style="width: 960px; margin: 0 auto;">
        <h1 style="margin-bottom: 50px; text-align: center;">
            <?php
                 echo $titolo;
            ?>
        </h1>
        <h2>
            <?php
                echo $citazioneZeroCalcare
            ?>
        </h2>
        <p>
            <?php
                echo "Lunghezza citazione: " . " " . strlen($citazioneZeroCalcare) . "" . "caratteri";
            ?>
        </p>
        <h2>
            <?php
                echo $fraseCensurataZerocalcare
            ?>
        </h2>
        <p>
        <?php
                echo "Lunghezza citazione censurata: " . " " . strlen($fraseCensurataZerocalcare) . " " . "caratteri";
            ?>
        </p>
        <hr>
        <h2>


            <?php
                echo $citazioneArmadillo;
            ?>
        </h2>
        <p>
        <?php
                 echo "Lunghezza citazione: " . " " . strlen($citazioneArmadillo) . " " . "caratteri";
            ?>
        </p>

        <hr>
        <h2>

            <?php
                echo $fraseCensurataArmadillo
            ?>
        </h2>

        <p>
        <?php
                echo "Lunghezza citazione censurata: " . " " . strlen($fraseCensurataArmadillo) . " " . "caratteri";
            ?>
        </p>
        
    </div>
</body>
</html>