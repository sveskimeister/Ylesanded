//ül 7, Sandra Veskimeister TARpe22 17.10.2023
<?php
function head_motted() {
    $alus = ["Täna", "Homme", "Igal juhul"];
    $oeldis = ["õnnestub", "ei õnnestu", "teeb vahet"];
    $sihitis = ["kõik", "keegi", "elus"];
    
    $valitud_alus = $alus[array_rand($alus)];
    $valitud_oeldis = $oeldis[array_rand($oeldis)];
    $valitud_sihitis = $sihitis[array_rand($sihitis)];
    
    return $valitud_alus . " " . $valitud_oeldis . " " . $valitud_sihitis;
}
?>