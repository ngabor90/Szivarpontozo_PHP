<?php
include_once("cigarClass.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szivarpontozó Rólunk - Németh Gábor</title>
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
            <a href="scoreCigar.php" style="--i:3;">Pontszámok</a>
            <a href="about.php" style="--i:4;" class="active">Kapcsolat</a>
        </nav>

        <div class="social-media">
            <a href="#" style="--i:1;"><i class='bx bxl-twitter'></i></a>
            <a href="#" style="--i:2;"><i class='bx bxl-facebook'></i></a>
            <a href="#" style="--i:3;"><i class='bx bxl-instagram-alt'></i></a>
        </div>
    </header>

    <section class="home">
        <div class="home-content">
            <h1>Bármi kérdésed van, kattins a gombra!</h1>
            <p><a class="submit-btn" href="tel:+36307385115"><strong>Hívás telefonon</strong></a></p>
            <p><a class="submit-btn" href="mailto:n.gabor90@gmail.com"><strong>Email küldés</strong></a></p>
        </div>

        <div class="rhombus2"></div>

        <div class="about-cigar">
            <img src="pics/cigar.jpg" alt="cigars">
        </div>
    </section>

</body>

</html>