<?php
include_once("cigarClass.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szivarpontozó Pontok - Németh Gábor</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <header class="header">
        <a href="index.php" class="logo"><img src="pics/logo.png" class="logoPic" alt="logoPic"></a>

        <input type="checkbox" id="check">
        <label for="check" class="icons">
            <i class="bx bx-menu" id="menu-icon"></i>
            <i class="bx bx-x" id="close-icon"></i>
        </label>


        <nav class="navbar">
            <a href="index.php" style="--i:1;">Főoldal</a>
            <a href="submitCigar.php" style="--i:2;">Értékelés feltöltése</a>
            <a href="scoreCigar.php" style="--i:3;" class="active">Pontszámok</a>
            <a href="about.php" style="--i:4;">Kapcsolat</a>
        </nav>

        <div class="social-media">
            <a href="#" style="--i:1;"><i class='bx bxl-twitter'></i></a>
            <a href="#" style="--i:2;"><i class='bx bxl-facebook'></i></a>
            <a href="#" style="--i:3;"><i class='bx bxl-instagram-alt'></i></a>
        </div>
    </header>

    <section class="home">
            <div class="custom-container">
                <div class="custom-row">
                    <div class="custom-table-wrapper">
                        <table class="custom-table">
                            <thead>
                                <tr>
                                    <th>Feltöltő neve</th>
                                    <th>Szivar neve</th>
                                    <th>Származása</th>
                                    <th>Méret</th>
                                    <th>Füstölési idő (perc)</th>
                                    <th>Pontszám</th>
                                    <th>Újra venném</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php

                                if (file_exists("cigar.csv")) {
                                    $csvRow = file("cigar.csv");

                                    for ($i = 0; $i < count($csvRow); $i++) {
                                        $currentRow = explode(";", $csvRow[$i]);
                                        $currentCigar = Cigar::csvToCigar($currentRow);

                                        echo ("<tr class=table-danger>");
                                        echo ("<td>" . htmlspecialchars($currentCigar->getName()) . "</td>");
                                        echo ("<td>" . htmlspecialchars($currentCigar->getCigarName()) . "</td>");
                                        echo ("<td>" . htmlspecialchars($currentCigar->getOrigin()->value) . "</td>");
                                        echo ("<td>" . htmlspecialchars($currentCigar->getSize()) . "</td>");
                                        echo ("<td>" . htmlspecialchars($currentCigar->getTime()) . "</td>");
                                        echo ("<td>" . htmlspecialchars($currentCigar->getScore()->value) . "</td>");
                                        echo ("<td>" . ($currentCigar->getBuyAgain() ? 'Igen' : 'Nem') . "</td>");
                                        echo ("</tr>");
                                    }
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <a class="submit-btn" href="submitCigar.php">Írok még egy értékelést!</a>
            </div>

            <div class="home-img">
        </div>

        <div class="rhombus2"></div>
    </section>

</body>

</html>