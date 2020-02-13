<?php


namespace App\Animals;


use App\Animal;

class BubbleFish extends Animal
{
    /**
     * @inheritDoc
     */
    protected function getNoise(): String
    {
        return 'bouboubou';
    }
}