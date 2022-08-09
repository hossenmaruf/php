<?php

class MyClass
{

    public $x, $y, $z;

    public function addSum()
    {

        $this->z = $this->x + $this->y;

        return $this->z;
    }


    public function __construct($a, $b)
    {
        $this->x = $a;
        $this->y = $b;
    }
}

$maruf = new MyClass(50, 1200);

echo $maruf->addSum();




?>