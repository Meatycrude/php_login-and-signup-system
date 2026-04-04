<?php

class Person{
    public $name;
    public $age;
    public $location;

    public function location($location){

    $this->location = $location;
    return $location;

    }


}