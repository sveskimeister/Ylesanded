//ül 7, Sandra Veskimeister TARpe22 17.10.2023

<?php
function on_oige_pikkus($isikukood) {
    return strlen($isikukood) === 11;
}

function leia_sugu_sunniaeg($isikukood) {
    if (on_oige_pikkus($isikukood)) {
        $sugu = $isikukood[0] % 2 === 0 ? "Naine" : "Mees";
        $sunniaeg = substr($isikukood, 5, 2) . "." . substr($isikukood, 3, 2) . "." . substr($isikukood, 1, 2);
        return ["Sugu" => $sugu, "Sünniaeg" => $sunniaeg];
    }
    return null;
}
?>