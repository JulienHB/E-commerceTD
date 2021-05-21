<?php

function prixTTC ($prixHt, $taux=20) {

    $prixTTC = $prixHt*(($taux/100)+1);

    $prixTTC = round($prixTTC,2);

    return $prixTTC;
} 