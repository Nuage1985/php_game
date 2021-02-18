<?php

include_once 'model/Character.php';



/*
* Référentiel de la classe Warrior
* Convention de code : PascalCase
* extends = hérite des propriétés publics/protégés (un seul héritage possible à la fois)
* final = non héritable (non obligatoire)
*/
final class Wizard extends Character
{
    // Constantes de classes (accessible via Wizard::XXX ou self::XXX)
    public const FIREBALL_DAMAGE = 60;
    public const FIREBALL_COST = 80;
    public const HEAL_RESTORE = 50;
    public const HEAL_COST = 50;

    /*
    * Attributs/propriétés en camelCase
    * Convenion de code : camelCase
    */
    private $magic;


    /*
    * Comportements/Fonction
    * Convention de code : camelCase
    */
    public function __construct(string $sName)
    {
        $this->name = $sName;
    }

    public function fireball(Character $b): void
    {
        if ($this->getMagic() < self::FIREBALL_COST) {
            echo "Not enough Mana!";
            return;
        }

        echo sprintf('(Fireball spell) %s >> %s', $this->getName(), $b->getName()) . PHP_EOL;
        $b->setHealth($b->getHealth() - Wizard::FIREBALL_DAMAGE);
        $this->setMagic($this->getMagic() - self::FIREBALL_COST);
    }


    public function heal(): void
    {
        if ($this->getMagic() < self::HEAL_COST) {
            echo "Not enough Mana!";
            return;
        }
        echo sprintf('(Heal spell) %s', $this->getName()) . PHP_EOL;
        $this->setHealth($this->getHealth() + self::HEAL_RESTORE);
        $this->setMagic($this->getMagic() - self::HEAL_COST);
    }

    public function __toString()
    {
        return parent::__toString() . ' [M: ' . $this->magic . ']';
    }

    /**
     * Get the value of magic
     */
    public function getMagic()
    {
        return $this->magic;
    }

    /**
     * Set the value of magic
     *
     * @return  self
     */
    public function setMagic($magic)
    {
        $this->magic = $magic;

        return $this;
    }
}
