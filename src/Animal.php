<?php

namespace App;


abstract class Animal {

    /**
     * @var String $name
     */
    private $name;

    /**
     * Animal constructor.
     *
     * @param String $name
     */
    public function __construct(String $name)
    {
       $this->name= $name;
    }

    /**
     * @return String
     */
    public function getName() : String
    {
        return $this->name;
    }

    /**
     * @return String
     */
    protected abstract function getNoise(): String;


    /**
     * @return String
     */
    public function noise() : String
    {
        return $this->getName().' : ' . $this->getNoise().'</br>'.'</br>';
    }

}