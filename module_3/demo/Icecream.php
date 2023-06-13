<?php

require_once 'Dessert.php';

class Icecream extends Dessert
{

//    private string $container;
//    private string $flavor;
//    private int $scoop;

    public function __construct(string         $name,
                                private string $container,
                                private string $flavor = 'vanilla',
                                private int    $scoop = 0)
    {
        parent::__construct($name);
//        $this->container = $container;
//        $this->flavor = $flavor;
//        $this->scoop = $scoop;
    }

    /**
     * @return string
     */
    public function getContainer(): string
    {
        return $this->container;
    }

    /**
     * @param string $container
     * @return Icecream
     */
    public function setContainer(string $container): Icecream
    {
        $this->container = $container;
        return $this;
    }

    /**
     * @return string
     */
    public function getFlavor(): string
    {
        return $this->flavor;
    }

    /**
     * @param string $flavor
     * @return Icecream
     */
    public function setFlavor(string $flavor): Icecream
    {
        $this->flavor = $flavor;
        return $this;
    }

    /**
     * @return int
     */
    public function getScoop(): int
    {
        return $this->scoop;
    }

    /**
     * @param int $scoop
     * @return Icecream
     */
    public function setScoop(int $scoop): Icecream
    {
        $this->scoop = $scoop;
        return $this;
    }


    public function __toString(): string
    {
        return parent::__toString() . " Flavor : $this->flavor, Container : $this->container, Ball : $this->scoop";
    }


}
