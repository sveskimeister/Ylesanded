//ül 9, Sandra Veskimeister TARpe22 17.10.2023

<!DOCTYPE html>
<html>
<head>
    <title>Ülesanne 9</title>
</head>
<body>
    <h1>Ülesanne 9</h1>

    <?php
    // 1. Tervitus nimepidi
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nimi = $_POST["nimi"];
        $tervitus = ucfirst(strtolower($nimi)); // Teisendab esimese tähe suureks ja ülejäänud väikesteks
        echo "<p>Tere, $tervitus!</p>";
    }

    // 2. Teksti tükeldamine punktide lisamiseks
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sisestatud_tekst = $_POST["sisestatud_tekst"];
        $tekst_punktidega = implode('.', str_split($sisestatud_tekst));
        echo "<p>$tekst_punktidega</p>";
    }

    // 3. Ropud sõnad tärnidega asendamine
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $sisestatud_sonum = $_POST["sisestatud_sonum"];
        $ropud_sonad = ["roppsõna1", "roppsõna2", "roppsõna3"]; // Lisa siia soovitud ropud sõnad
        $asendatud_sonum = str_replace($ropud_sonad, "****", $sisestatud_sonum);
        echo "<p>$asendatud_sonum</p>";
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $eesnimi = $_POST["eesnimi"];
        $perenimi = $_POST["perenimi"];

        $email = strtolower(str_replace(["ä", "ö", "ü", "õ"], ["a", "o", "u", "o"], $eesnimi)) . "." . strtolower(str_replace(["ä", "ö", "ü", "õ"], ["a", "o", "u", "o"], $perenimi)) . "@tthk.ee";
        echo "<p>Email: $email</p>";
    }
    ?>

    <h2>1. Tervitus nimepidi</h2>
    <form method="post">
        <label for="nimi">Nimi:</label>
        <input type="text" name="nimi" id="nimi">
        <input type="submit" value="Tervita">
    </form>

    <h2>2. Teksti tükeldamine punktide lisamiseks</h2>
    <form method="post">
        <label for="sisestatud_tekst">Sisesta tekst:</label>
        <input type="text" name="sisestatud_tekst" id="sisestatud_tekst">
        <input type="submit" value="Tükelda tekst">
    </form>

    <h2>3. Ropud sõnad tärnidega asendamine</h2>
    <form method="post">
        <label for="sisestatud_sonum">Sisesta sõnum:</label>
        <input type="text" name="sisestatud_sonum" id="sisestatud_sonum">
        <input type="submit" value="Asenda ropud sõnad">
    </form>

    <h2>4. Emaili loomine eesnime ja perenime põhjal</h2>
    <form method="post">
        <label for="eesnimi">Eesnimi:</label>
        <input type="text" name="eesnimi" id="eesnimi">
        <label for="perenimi">Perenimi:</label>
        <input type="text" name="perenimi" id="perenimi">
        <input type="submit" value="Loo email">
    </form>
</body>
</html>