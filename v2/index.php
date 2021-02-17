<?php
// ! À supprimer en prod. !
error_reporting(E_ALL);
ini_set('display_errors', 1);


include_once 'model/Warrior.php';
$oAragorn = new Warrior('Aragorn');
$oAragorn->setName('Aragorn');
$oAragorn->setHealth(50);
$oAragorn->setStrength(100);
// echo = appel de la fonction __toString
echo $oAragorn.PHP_EOL;


include_once 'model/Wizard.php';
$oGandalf = new Wizard('Gandalf');
$oGandalf->setName ('Gandalf');
$oGandalf->setHealth (35);
$oGandalf->setStrength (65);
$oGandalf->setMagic (200);
// appel de la fonction personalisée 'display'
$oGandalf->display();
