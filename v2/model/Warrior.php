<?php

include_once 'model/Character.php';

/*
* Référentiel de la classe Warrior
* Convention de code : PascalCase
* extends = hérite des propriétés publics/protégés (un seul héritage possible à la fois)
* final = non héritable (non obligatoire)
*/
final class Warrior extends Character
{
    public function __construct(string $sName = 'Warrior')
    {
        $this->name = $sName;
    }
}
