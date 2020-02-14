<?php


namespace App;


use App\Interfaces\CanFly;
use App\Interfaces\CanSwim;
use App\Interfaces\CanWalk;

class Zoo
{
    /**
     * @var Enclosure $aquarium
     */
    private static $aquarium = null;

    /**
     * @var Enclosure $aviary
     */
    private static $aviary = null;

    /**
     * @var Enclosure $fence
     */
    private static $fence = null;

    /**
     * @return Enclosure
     */
    public static function getAquarium(): Enclosure

    {
        return self::$aquarium;
    }

    /**
     * @return Enclosure
     */
    public static function getAviary(): Enclosure
    {
        return self::$aviary;
    }

    /**
     * @return Enclosure
     */
    public static function getFence(): Enclosure
    {
        return self::$fence;
    }

    /**
     * @param Animal $animal
     */
    public static function addAnimal(Animal $animal): void
    {
        if (self::$aquarium === null) {
            self::$aquarium = new Enclosure();
        }
        if (self::$aviary === null) {
            self::$aviary = new Enclosure();
        }
        if (self::$fence === null) {
            self::$fence = new Enclosure();
        }

        if ($animal instanceof CanSwim) {
            self::$aquarium->addAnimal($animal);
            //echo self::$aquarium->__toString();
        }
        if ($animal instanceof CanWalk) {
            self::$fence->addAnimal($animal);
            //echo self::$fence->__toString();
        }
        if ($animal instanceof CanFly) {
            self::$aviary->addAnimal($animal);
            //echo self::$aviary->__toString();
        }

    }

    public static function visitTheZoo()
    {
        echo '<h1>AQUARIUM</h1>'. self::getAquarium(). '<h1>FENCE</h1>'.
            self::getFence().'<h1>AVIARY</h1>'.self::getAviary();
    }
}
