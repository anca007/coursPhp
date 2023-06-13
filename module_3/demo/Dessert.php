<?php

class Dessert
{

    public function __construct(private string $name)
    {
    }

    public function __toString(): string
    {
        return "C'est un(e) $this->name";
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Dessert
     */
    public function setName(string $name): Dessert
    {
        $this->name = $name;
        return $this;
    }



}