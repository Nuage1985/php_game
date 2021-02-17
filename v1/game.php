<?php
// ! À supprimer en prod. !
error_reporting(E_ALL);
ini_set('display_errors', 1);


//Functions
include_once 'includes/functions.php';

define('TYPE_WARRIOR', [
    'name' => 'Warrior',
    'min_health' => 60,
    'max_health' => 100,
    'min_strength' => 50,
    'max_strength' => 80,
]);

define('TYPE_WIZARD', [
    'name' => 'Wizard',
    'min_health' => 40,
    'max_health' => 80,
    'min_strength' => 25,
    'max_strength' => 45,
    'min_magic' => 150,
    'max_magic' => 200,
]);

define('TYPE_STEALTH', [
    'name' => 'Stealth',
    'min_health' => 25,
    'max_health' => 50,
    'min_strength' => 8,
    'max_strength' => 20,
    'min_stealth' => 400,
    'max_stealth' => 800,
]);

//constantes
//const SIZE_X = 5;
//const SIZE_Y = 5;
define('SIZE_X', 10);
define('SIZE_Y', 10);

// PHP_EOL const équivalente à "\n" = saut de ligne
echo '== Début du programme ==' . PHP_EOL;
echo PHP_EOL;


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
for ($y = 0; $y < SIZE_Y; $y++) {
    $aBoard[$y] = [];
    //  -- Pour chaque ligne on créé les colonnes
    for ($x = 0; $x < SIZE_X; $x++) {
        $aBoard[$y][$x] = '.';
    }
}


//2. créer les personnages
$aAragorn = [
    'name' => 'Aragorn',
    'type' => TYPE_WARRIOR,
    'position' => ['x' => null, 'y' => null,],
];

$aGandalf = [
    'name' => 'Gandalf',
    'type' => TYPE_WIZARD,
    'position' => ['x' => null, 'y' => null,],
];

$aFrodo = [
    'name' => 'Frodo',
    'type' => TYPE_STEALTH,
    'position' => ['x' => null, 'y' => null,],
];


$aCharacters = [
    $aAragorn,
    $aGandalf,
    $aFrodo,
];


//Création des stats des personnages
foreach ($aCharacters as &$aCharacter) {
    buildStats($aCharacter);
}
unset($aCharacter); // Supprimer l'effet de bord


// 3. Positionner ,aléatoirement, nos joueurs dans le plateau
// ex: $board[y][x] = $aGandalf
foreach ($aCharacters as $aCharacter) {
    $aBoard[$aCharacter['position']['y']][$aCharacter['position']['x']] = $aCharacter;
}
echo PHP_EOL;


// 4. Afficher le plateau de jeu proprement avec function displayBoard
// [.][.][.]
// [.][.][.]
// [.][.][.]
echo displayBoard($aBoard);
echo PHP_EOL;

// Affichage dynamique des joueurs (appel de la fonction displayPlayers)
echo displayPlayers($aCharacters);

echo '== Fin du programme ==' . "\n";
