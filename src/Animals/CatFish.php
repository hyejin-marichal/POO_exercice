<?php


namespace App\Animals;


use App\Animal;

class CatFish extends Animal
{

    /**
     * @inheritDoc
     */
    protected function getNoise(): String
    {
       return 'miole';
    }
}