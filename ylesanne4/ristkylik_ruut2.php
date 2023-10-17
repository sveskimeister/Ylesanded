//ül 4, Sandra Veskimeister TARpe22 17.10.2023

<!DOCTYPE html>
<html>
<head>
    <title>Ristkülik või ruut 2</title>
</head>
<body>
    <h2>Ristkülik või ruut 2</h2>
    <form method="get" action="">
        Sisesta külg: <input type="number" name="side"><br>
        <input type="submit" value="Otsusta">
    </form>
    <?php
    if (!empty($_GET['side'])) {
        $side = $_GET['side'];

        if ($side > 0) {
            if ($side * $side == $side) {
                echo "See on ruut";
            } else {
                echo "See on ristkülik";
            }
        } else {
            echo "Sisesta positiivne arv";
        }
    }
    ?>
</body>
</html>