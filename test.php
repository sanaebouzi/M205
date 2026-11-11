
<?php

include "fonctions.php";

echo "12 + 8 = " . additionner(12, 8) . "<br>";
echo "12 - 8 = " . soustraire(12, 8) . "<br>";
echo "12 * 8 = " . multiplier(12, 8) . "<br>";
echo "12 / 4 = " . diviser(12, 4) . "<br>";

try {
    echo "10 / 0 = " . diviser(10, 0) . "<br>";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br>";
}

echo "estPair(4) = " . var_export(estPair(4), true) . "<br>";
echo "estPair(7) = " . var_export(estPair(7), true) . "<br>";

echo "estPositif(5) = " . var_export(estPositif(5), true) . "<br>";
echo "estPositif(-5) = " . var_export(estPositif(-5), true) . "<br>";

echo "maximum(10, 25, 15) = " . maximum(10, 25, 15) . "<br>";

echo "estPremier(7) = " . var_export(estPremier(7), true) . "<br>";
echo "estPremier(10) = " . var_export(estPremier(10), true) . "<br>";

echo "TTC de 100 = " . calculerTTC(100) . "<br>";
echo "TTC de 100 avec TVA 10 = " . calculerTTC(100, 10) . "<br>";

echo "Remise de 10% sur 100 = " . calculerRemise(100, 10) . "<br>";

echo "Facture = " . calculerFacture(100, 2, 10, 20) . "<br>";

echo "moyenne(12, 15, 18) = " . moyenne(array(12, 15, 18)) . "<br>";
echo "moyenne() = " . moyenne(array()) . "<br>";

echo "Aire du cercle de rayon 5 = " . aireCercle(5) . "<br>";
echo "Perimetre du cercle de rayon 5 = " . perimetreCercle(5) . "<br>";

echo "factorielle(5) = " . factorielle(5) . "<br>";

try {
    echo "factorielle(-3) = " . factorielle(-3) . "<br>";
} catch (Exception $e) {
    echo "Erreur : " . $e->getMessage() . "<br>";
}

echo "fibonacci(7) = " . implode(", ", fibonacci(7)) . "<br>";

echo "PGCD(12, 8) = " . pgcd(12, 8) . "<br>";

?>
