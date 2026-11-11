<?php
declare(strict_types=1);
function additionner( $a,$b)
{
    return $a + $b;
}

function soustraire( $a, $b)
{
    return $a - $b;
}

function multiplier($a,$b)
{
    return $a * $b;
}

function diviser($a,$b)
{
    if ($b == 0) {
        throw new InvalidArgumentException("Division par zéro impossible");
    }

    return $a / $b;
}

function estPair($n)
{
    return ($n % 2 == 0);
}

function estPositif($n)
{
    return ($n > 0);
}

function maximum($a, $b,$c)
{
    $m = ($a > $b) ? $a : $b;
    return ($m > $c) ? $m : $c;
}

function estPremier($n)
{
    if ($n < 2) {
        return false;
    }

    for ($i = 2; $i <$n; $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }

    return true;
}

function calculerTTC($ht,$tva = 20.0)
{
    return $ht * (1 + $tva / 100);
}

function calculerRemise($prix, $pourcentage)
{
    $remise = $prix * $pourcentage / 100;
    return  $prix = $prix - $remise;
}

function calculerFacture( $prixUnitaire,$quantite,$remise = 0,$tva = 20.0)
 {
    $total = $prixUnitaire * $quantite;

    $total = calculerRemise($total, $remise);

    return calculerTTC($total, $tva);
}
function moyenne($notes)
{
    $somme = 0;
    $compteur = 0;
    foreach ($notes as $note) {
        $somme = $somme + $note;
        $compteur = $compteur + 1;
    }
    if ($compteur == 0) {
        return 0;
    }
    return $somme / $compteur;
}

function aireCercle($rayon)
{
   return $aire = 3.14159 * $rayon * $rayon;
     
}

function perimetreCercle($rayon)
{
   return $perimetre = 2 * 3.14159 * $rayon;
     
}

function factorielle($n)
{
    if ($n < 0) {
        throw new Exception("Impossible de calculer la factorielle de $n");
    }
    $resultat = 1;
    for ($i = 1; $i <= $n; $i++) {
        $resultat = $resultat * $i;
    }
    return $resultat;
}

function fibonacci($n)
{
    $suite = array();
    if ($n >= 1) {
        $suite[] = 0;
    }
    if ($n >= 2) {
        $suite[] = 1;
    }
    for ($i = 2; $i < $n; $i++) {
        $prochain = $suite[$i - 1] + $suite[$i - 2];
        $suite[] = $prochain;
    }
    return $suite;
}
function pgcd($a,$b)
{
    while ($b != 0) {
        $r = $a % $b;
        $a = $b;
        $b = $r;
    }

    return $a;
}
