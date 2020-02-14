<?php


namespace App;


class Enclosure
{
    /**
     * @var Animal[] $animals
     */
    private $animals;

    /**
     * @param Animal $animal
     */
    public function addAnimal(Animal $animal): void
    {
        $this->animals[] = $animal;
    }

    /**
     * @return string|null
     */
    public function __toString()
    {
       $allsounds = null;
       foreach ($this->animals as $animal)
       {
           $allsounds .= $animal->noise();
       }
       return $allsounds;
    }
}

