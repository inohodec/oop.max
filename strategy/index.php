<?php
interface SuperDuck {

}
class Duck implements SuperDuck {
    public $color;

    public function __construct()
    {
    }
}
class SmallDuck extends Duck {
    public $size;
    function fly(Features $flying) {
        $flying->flying();
    }
}

interface Features {
    public function flying();
}
class RocketFly implements Features {
    function flying()
    {
        // TODO: Implement flying() method.
    }
}