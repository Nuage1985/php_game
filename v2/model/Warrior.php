<?php
/*
* Référentiel de la classe Warrior
* Convention de code : PascalCase
*/
class Warrior
{
    /*
    * Attributs/propriétés en camelCase
    * Convenion de code : camelCase
    */
    private $name;
    private $health;
    private $strength;

    public function __construct(string $sName = 'Warrior')
    {
        $this->name = $sName;
    }


    /*
    * Comportements/Fonction
    * Convention de code : camelCase
    
    *Fonction spéciale permettant de convertir un objet en chaîne de caractères
    *(via echo par exemple)
    */
    public function __toString()
    {
        return $this->name;
    }

    /**
     * Get /*
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set /*
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

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
}
