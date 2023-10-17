//ül 11, Sandra Veskimeister TARpe22 17.10.2023

<?php
$filename = 'andmefail.txt';
if (file_exists($filename)) {
    $fileSize = filesize($filename);
    if ($fileSize > 200) {
        unlink($filename);
        echo 'Fail on suurem kui 200 baiti ja see on kustutatud.';
    } else {
        echo 'Fail ei vasta kustutamise kriteeriumile.';
    }
} else {
    echo 'Faili ei leitud.';
}
?>