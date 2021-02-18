<?php

//Socker les propriétées communes à tout nos personnages

/*
  * Attributs/propriétés en camelCase
 * Convenion de code : camelCase
 */
abstract class Character
{
    protected $name;
    protected $health;
    protected $strength;


    /*
    * Comportements/Fonction
    * Convention de code : camelCase
    */
    public function hit(Character $b): void
    {
        //$strengthA = $a->getStrength();
        //$healthB =  $b->getHealth();
        //$b->setHealth( $healthB - $healthB );
        echo sprintf('(Attack) %s >> %s', $this->getName(), $b->getName()) . PHP_EOL;
        $b->setHealth($this->getHealth() - $b->getStrength());
    }

    //Fonction spéciale permettant de convertir un objet en chaîne de caractères
    //(via echo par exemple)
    public function __toString()
    {
        return $this->name . ' [H: ' . $this->health . '] '
            . '[S ' . $this->strength . ']';
    }

    /**
     * Get the value of strength
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * Set the value of strength
     *
     * @return  self
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;

        return $this;
    }

    /**
     * Get the value of health
     */
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * Set the value of health
     *
     * @return  self
     */
    public function setHealth($health)
    {
        $this->health = $health;

        return $this;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
