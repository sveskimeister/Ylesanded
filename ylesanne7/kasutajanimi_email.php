//ül 7, Sandra Veskimeister TARpe22 17.10.2023

<?php
function muuda_kasutajanimi($kasutajanimi) {
    return strtolower($kasutajanimi);
}

function genereeri_email($kasutajanimi) {
    return $kasutajanimi . "@hkhk.edu.ee";
}

function genereeri_kood() {
    return substr(str_shuffle("ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789"), 0, 7);
}
?>