<?php

// ! À supprimer en prod. !
error_reporting(E_ALL);
ini_set('display_errors', 1);

include_once 'model/Character.php';
include_once 'model/Warrior.php';
include_once 'model/Wizard.php';

echo PHP_EOL . '=============== Players ===============' . PHP_EOL . PHP_EOL;

$oAragorn = new Warrior('Aragorn');
$oAragorn->setName('Aragorn');
$oAragorn->setHealth(150);
$oAragorn->setStrength(50);
// echo = appel de la fonction __toString
echo $oAragorn . PHP_EOL;


$oGandalf = new Wizard('Gandalf');
$oGandalf->setName('Gandalf');
$oGandalf->setHealth(70);
$oGandalf->setStrength(20);
$oGandalf->setMagic(200);
// echo = appel de la fonction __toString
echo $oGandalf . PHP_EOL . PHP_EOL;


/*
    Exercice 1
    > Créer un guerrier "Aragorn" [Santé : 150 ; Force : 50]
    > Créer un Magicien "Gandalf" [Santé : 70 ; Force : 20 ; Mana : 200]
    > Afficher les personnages en mode "debug"

    >Créer une fonction  (hit) pour simuler le combat entre deux personnages A et B
    > ex : A frappe B avec une force XX >> B perds XX points de vie
*/

echo '=============== Combat starts ===============' . PHP_EOL . PHP_EOL;

$oAragorn->hit($oGandalf);
print_r( $oAragorn . PHP_EOL . $oGandalf . PHP_EOL . PHP_EOL );


/*
    Exercice 2
    -> Créer une fonction "fireball" pour simuler le lancement d'un sort (le sort en question occasionne 60 dégâts et consomme 80 de mana)
    -> Créer une fonction "heal" pour simuler le lancement d'un sort (le sort en question restaure 50 points de vie et consomme 50 de mana)
    (le sort "heal" est personnel et ne peut pas être lancé sur quelqu'un d'autre)
*/

$oGandalf->fireball($oAragorn);

$oGandalf->heal($oAragorn);
print_r( $oAragorn . PHP_EOL . $oGandalf . PHP_EOL );

echo PHP_EOL . '=============== Combat ends ===============';
