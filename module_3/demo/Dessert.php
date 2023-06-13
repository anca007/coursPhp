<?php


class Dessert
{

    protected static int $number = 0;

    public function __construct(private string $name)
    {
        self::$number++;
    }

    public function __destruct()
    {
        self::$number--;
    }

    /**
     * @return int
     */
    public static function getNumber(): int
    {
        return self::$number;
    }

    /**
     * @param int $number
     */
    public static function setNumber(int $number): void
    {
        static::$number = $number;
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