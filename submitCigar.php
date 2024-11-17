<?php
include_once("cigarClass.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Ellenőrizzük, hogy a szükséges mezők léteznek-e
    if (isset($_POST['name'], $_POST['cigarName'], $_POST['origin'], $_POST['size'], $_POST['time'], $_POST['score'])) {
        // Név és egyéb mezők beolvasása
        $name = $_POST['name'];
        $cigarName = $_POST['cigarName'];
        $origin = Origin::from($_POST['origin']);
        $size = $_POST['size'];
        $time = floatval($_POST['time']);
        $score = Score::from($_POST['score']);

        // A buyAgain változó kezelése
        $buyAgain = isset($_POST['buyAgain']) && $_POST['buyAgain'] === 'on';

        // Szivar létrehozása és hozzáfűzése a fájlhoz
        $cigar = new Cigar($name, $cigarName, $origin, $size, $time, $score, $buyAgain);
        file_put_contents("cigar.csv", $cigar->CSV(), FILE_APPEND);

        // Átirányítás az index.php oldalra
        header("Location: scoreCigar.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szivarpontozó Feltöltés - Németh Gábor</title>
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
            <a href="submitCigar.php" style="--i:2;" class="active">Értékelés feltöltése</a>
            <a href="scoreCigar.php" style="--i:3;">Pontszámok</a>
            <a href="about.php" style="--i:4;">Kapcsolat</a>
        </nav>

        <div class="social-media">
            <a href="#" style="--i:1;"><i class='bx bxl-twitter'></i></a>
            <a href="#" style="--i:2;"><i class='bx bxl-facebook'></i></a>
            <a href="#" style="--i:3;"><i class='bx bxl-instagram-alt'></i></a>
        </div>
    </header>

    <section class="home">
        <div class="home-content2">
        <div class="form-container">

    <div class="form-body">
        <!--<h1>Szivarok feltöltése</h1>-->
        <form method="post">
            <div class="form-group">
                <label for="name" class="form-label">Feltöltő neve:</label>
                <input placeholder="Németh Gábor" class="form-input" type="text" name="name" id="name" required>
            </div>

            <div class="form-group">
                <label for="cigarName" class="form-label">Szivar neve:</label>
                <input placeholder="Arturo Fuente Gran Reserva" class="form-input" type="text" name="cigarName" id="cigarName" required>
            </div>

            <div class="form-group">
                <label for="origin" class="form-label">Származása:</label>
                <select name="origin" id="origin" class="form-input" required>
                    <option value="Dominika">Dominika</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Kuba">Kuba</option>
                    <option value="Egyeb">Egyéb</option>
                </select>
            </div>

            <div class="form-group">
                <label for="size" class="form-label">Méret:</label>
                <input placeholder="Robusto" class="form-input" type="text" name="size" id="size" required>
            </div>

            <div class="form-group">
                <label for="time" class="form-label">Füstölési idő (perc):</label>
                <input placeholder="60" class="form-input" type="number" name="time" id="time" required>
            </div>

            <div class="form-group">
                <label for="score" class="form-label">Pontszám:</label>
                <select name="score" id="score" class="form-input" required>
                    <option value="Legjobb">5 - Legjobb</option>
                    <option value="Jó">4 - Jó</option>
                    <option value="Közepes">3 - Közepes</option>
                    <option value="Elmegy">2 - Elmegy</option>
                    <option value="Rossz">1 - Rossz</option>
                </select>
            </div>

            <div class="form-group">
                <input type="checkbox" name="buyAgain" id="buyAgain" class="checkbox">
                <label for="buyAgain" class="form-label">Újra venném</label>
            </div>

            <div class="form-actions">
                <input type="submit" name="Felvitel" class="btn">
                <input type="reset" name="Alapállapot" class="reset-btn">
            </div>
        </form>
    </div>
</div>

        </div>

        <div class="home-img">
        </div>

        <div class="rhombus2"></div>
    </section>

</body>

</html>