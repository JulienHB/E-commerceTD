<?php

function totalPrice ($prixHt, $taux=20, $qte) {

    $prixTTC = ($prixHt*(($taux/100)+1))*$qte;
    $prixTTC = round($prixTTC,2);

    return $prixTTC;
} 