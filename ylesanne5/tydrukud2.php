//ül 5, Sandra Veskimeister TARpe22 17.10.2023

<?php

$tudrukud = array("Maria", "Anna", "Laura", "Emma", "Kadri", "Liisa", "Mia", "Helena");

echo "Esimene 3 nime:<br>";
for ($i = 0; $i < 3; $i++) {
    echo $tudrukud[$i] . "<br>";
}

echo "Viimane nimi: " . end($tudrukud) . "<br>";

$randomIndex = array_rand($tudrukud);
echo "Suvaline nimi: " . $tudrukud[$randomIndex] . "<br>";
?>