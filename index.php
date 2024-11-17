<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Szivarpontozó Főoldal - Németh Gábor</title>
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
            <a href="index.php" style="--i:1;" class="active">Főoldal</a>
            <a href="submitCigar.php" style="--i:2;">Értékelés feltöltése</a>
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
        <div class="home-content">
            <h1>Üdvözöljük a Szivar Pontozó oldalon!</h1>
            <h3>Töltse fel szivar értékeléseit!</h3>
            <p>Töltse fel szivar humidorja legújabb szerzeményeit, és ossza meg tapasztalatait másokkal!</p>
            <p>Böngéssze át más felhasználók értékeléseit és találjon inspirációt új szivarok kipróbálásához!
                Alkossunk közösséget!</p>
            <a href="scoreCigar.php" class="submit-btn">Pontszámok</a>
        </div>

        <div class="home-img">
            <div class="rhombus">
                <img src="pics/camacho.png" alt="cigar">
            </div>
        </div>

        <div class="rhombus2"></div>
        <div class="mobil-pic">
            <img src="pics/camacho.webp" alt="camacho-cigar">
        </div>
    </section>

</body>

</html>