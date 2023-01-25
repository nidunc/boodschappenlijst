<?php

class Grocery {
    protected $name;
    protected $price;
    protected $number;

    /* public function __construct($name, $price, $number) {
        $this->name = $name;
        $this->price = $price;
        $this->number = $number;
    } */

    public function name() {
        return ucfirst($this->name);
    }

    public function price() {
        return $this->price;
    }

    public function number() {
        return $this->number;
    }
}
