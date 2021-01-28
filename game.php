<?php
// ! À supprimer en prod. !
error_reporting(E_ALL);
ini_set(display_errors, 1);

// PHP_EOL const équivalente à "\n" = saut de ligne
echo '== Début du programme ==' . PHP_EOL;

/*
        1. Créer le plateau de jeu
            > Tableau à deux dimensions (tableau de tableaux)
            > $aBoard[0][0] = '.';
    */

//Initialisation d'un tableau 5x5
$aBoard = [];

//1.a Initialisation des lignes
//  -- Pour toute les lignes, j'attribue un tableau vide
//  ! Dans l'affichage les axes x et y sont inversés : le nom des variables ne changent rien mais on peut les inverser pour se repérer
for ($y = 0; $y < 5; $y++) {
    $aBoard[$y] = [];
    //  -- Pour chaque ligne on créé les colonnes
    for ($x = 0; $x < 5; $x++) {
        $aBoard[$y][$x] = '.';
    }
}

//print_r($aBoard);

//2. créer les personnages Aragorn et Gandalf
$aAragorn = [
    'name' => 'Aragorn',
    'health' => 100,
    'strength' => 50,
];

$aGandalf = [
    'name' => 'Gandalf',
    'health' => 80,
    'strength' => 20,
    'magic' => 200,
];

$aCharacters = [
    $aAragorn,
    $aGandalf,
];

//print_r($aPlayers);

// Aragorn : [H:100] [S:50]
// Gandalf : [H:80] [S:20] [M:200]
// Affichage dynamique des joueurs
foreach ($aCharacters as $aCharacter) {
    echo $aCharacter['name'] . ' [H: ' . $aCharacter['health'] . '] [S: ' . $aCharacter['strength'] . ']';
    if (array_key_exists('magic', $aCharacter)) {
        echo ' [M:' . $aCharacter['magic'] . ']';
    }
    echo PHP_EOL;
}

// 3. Positionner ,aléatoirement, nos joueurs dans le plateau
// ex: $board[x][y] = $aGandalf
foreach ($aCharacters as $aCharacter) {
    $aBoard[rand(0, 4)][rand(0, 4)] = $aCharacter;
}

//print_r($aBoard);

// 4. Afficher le plateau de jeu proprement
// [.][.][.]
// [.][.][.]
// [.][.][.]
for ($y = 0; $y < 5; $y++) {
    for ($x = 0; $x < 5; $x++) {
        if (is_array($aBoard[$y][$x])) {
            echo ' [X] ';
        } else {
            echo ' [' . $aBoard[$y][$x] . '] ';
        }
    }
    echo PHP_EOL;
    
}

echo '== Fin du programme ==' . "\n";
