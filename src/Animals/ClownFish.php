<?php


namespace App\Animals;


use App\Animal;

class ClownFish extends Animal
{

    /**
     * @inheritDoc
     */
    protected function getNoise(): String
    {
       return 'clune';
    }
}