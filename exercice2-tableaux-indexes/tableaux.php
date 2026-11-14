
<?php
$notes = [12, 15, 8, 17, 9, 14, 11];
$prenoms = ['Sara', 'Youssef', 'Imane', 'Omar', 'Khadija'];

echo "<h2>Etape 1 - Lecture et parcours</h2>";

echo "Premiere note : " . $notes[0] . "<br>";
echo "Derniere note : " . $notes[count($notes) - 1] . "<br>";
echo "Nombre de notes : " . count($notes) . "<br>";

for ($i = 0; $i < count($notes); $i++) {
    echo "Note n°" . ($i + 1) . " : " . $notes[$i] . "<br>";
}

foreach ($notes as $i => $note) {
    echo "Note n°" . ($i + 1) . " : " . $note . "<br>";
}
foreach ($prenoms as $i => $prenom) {
    echo ($i + 1) . ". " . $prenom . "<br>";
}

echo "<h2>Etape 2 - Ajouter, retirer, inserer</h2>";

$notes[] = 16;
array_push($notes, 16);
print_r($notes);
echo "<br>";

array_unshift($notes, 10);

print_r($notes);
echo "<br>";

$derniere = array_pop($notes);
$premiere = array_shift($notes);

echo  $derniere . "<br>";
echo  $premiere . "<br>";


array_splice($notes, 2, 0, 13);

print_r($notes);
echo "<br>";


unset($notes[1]);

print_r($notes);
echo "<br>";

$notes = array_values($notes);

print_r($notes);
echo "<br>";


echo "<h2>Etape 3 - Recherche</h2>";

if (in_array(17, $notes)) {
    echo "La note 17 existe.<br>";
} else {
    echo "La note 17 n'existe pas.<br>";
}

$indice = array_search(9, $notes);

if ($indice !== false) {
    echo "La note 9 existe a l'indice : " . $indice . "<br>";
} else {
    echo "La note 9 n'existe pas.<br>";
}

if (in_array('Omar', $prenoms)) {
    echo "Omar existe dans le tableau.<br>";
} else {
    echo "Omar n'existe pas dans le tableau.<br>";
}


echo "<h2>Etape 4 - Statistiques</h2>";

$notes = [12, 15, 8, 17, 9, 14, 11];

$somme = array_sum($notes);
$moyenne = $somme / count($notes);
$minimum = min($notes);
$maximum = max($notes);

echo  $somme . "<br>";
echo round($moyenne, 2) . "<br>";
echo   $minimum . "<br>";
echo   $maximum . "<br>";

$admis = 0;

foreach ($notes as $note) {
    if ($note >= 10) {
        $admis++;
    }
}

echo $admis . "<br>";

$notesAdmis = array_filter($notes, function($note) {
    return $note >= 10;
});

echo count($notesAdmis) . "<br>";

$pourcentage = ($admis / count($notes)) * 100;

echo  round($pourcentage, 2) . "%<br>";



?>
