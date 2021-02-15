<?php
// ! À supprimer en prod. !
error_reporting(E_ALL);
ini_set('display_errors', 1);

//Functions
include_once 'includes/functions.php';

define('WARRIOR', array(
    'class' => 'Warrior',
    'health' => 100,
    'strength' => 50,
));

define('WIZARD', array(
    'class' => 'Wizard',
    'health' => 80,
    'strength' => 20,
    'magic' => 200,
));

define('STEALTH', array(
    'class' => 'Stealth',
    'health' => 50,
    'strength' => 8,
    'stealth' => 800,
));

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

//print_r($aBoard);

//2. créer les personnages
$aAragorn = [
    'name' => 'Aragorn',
    'type' => WARRIOR,
    'position' => ''
];

$aGandalf = [
    'name' => 'Gandalf',
    'type' => WIZARD,
    'position' => ''
];

$aFrodo = [
    'name' => 'Frodo',
    'type' => STEALTH,
    'position' => ''
];

$aCharacters = [
    $aAragorn,
    $aGandalf,
    $aFrodo
];

//print_r($aPlayers);

// Aragorn : [H:100] [S:50]
// Gandalf : [H:80] [S:20] [M:200]
// Affichage dynamique des joueurs (appel de la fonction displayPlayers)
echo displayPlayers($aCharacters);

// 3. Positionner ,aléatoirement, nos joueurs dans le plateau
// ex: $board[y][x] = $aGandalf
foreach ($aCharacters as $aCharacter) {
    $y = rand( 0, (SIZE_Y - 1) );
    $x = rand( 0, (SIZE_X - 1) );
    $aBoard[$y][$x] = $aCharacter;
    echo '[' . $x . '/' . $y . ']: ' . $aCharacter['name'] . PHP_EOL;
    echo PHP_EOL;
}

//print_r($aBoard);

// 4. Afficher le plateau de jeu proprement avec function displayBoard
// [.][.][.]
// [.][.][.]
// [.][.][.]
echo displayBoard($aBoard);
echo PHP_EOL;

//Nouvel appel de la fonction displayPlayers
echo displayPlayers($aCharacters);

echo '== Fin du programme ==' . "\n";
