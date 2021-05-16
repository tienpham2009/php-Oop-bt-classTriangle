<?php

use JetBrains\PhpStorm\Pure;

include_once "Shape.php";

class Triangle extends Shape
{
    private int|float $side1;
    private int|float $side2;
    private int|float $side3;
    private int|float $p;

    public function __construct($name, $array)
    {
        parent::__construct($name);
        $this->side1 = $array["side1"];
        $this->side2 = $array["side2"];
        $this->side3 = $array["side3"];

        // $p la nua chu vi cua tam giac
        $this->p = ($this->side1 + $this->side2 + $this->side3) / 2;
    }

    public function checkTriangle():bool
    {
        if ($this->p > $this->side1
        && $this->p > $this->side2
        && $this->p > $this->side3){
            return true;
        } else{
            return false;
        }
    }

    public function defaultTriangle(): string
    {
        $this->side1 = 1.0;
        $this->side2 = 1.0;
        $this->side3 = 1.0;

        return "canh 1: " . $this->side1 .
            "<br>" . "canh 2: " . $this->side2 .
            "<br>" . "canh 3: " . $this->side3;
    }

    /**
     * @return float|int
     */
    public function getP(): float|int
    {
        return $this->p;
    }

    /**
     * @return float|int|mixed
     */
    public function getSide1(): mixed
    {
        return $this->side1;
    }

    /**
     * @param float|int|mixed $side1
     */
    public function setSide1(mixed $side1): void
    {
        $this->side1 = $side1;
    }

    /**
     * @return float|int|mixed
     */
    public function getSide2(): mixed
    {
        return $this->side2;
    }

    /**
     * @param float|int|mixed $side2
     */
    public function setSide2(mixed $side2): void
    {
        $this->side2 = $side2;
    }

    /**
     * @return float|int|mixed
     */
    public function getSide3(): mixed
    {
        return $this->side3;
    }

    /**
     * @param float|int|mixed $side3
     */
    public function setSide3(mixed $side3): void
    {
        $this->side3 = $side3;
    }

    #[Pure] public function getArea(): int|float
    {
        if ($this->checkTriangle()){
            return sqrt($this->p *
                ($this->p - $this->side1) *
                ($this->p - $this->side2) *
                ($this->p - $this->side3)) ;
        }else {
            return -1;
        }
    }

    #[Pure] public function __toString(): string
    {
        return "canh 1: ". $this->side1.
            "<br>"."canh 2: ". $this->side2.
            "<br>"."canh 3: ".$this->side3.
            "<br>"."Area :". $this->getArea();
    }


}