<?php


namespace App\classes;


abstract class Teacher
{
    public $x = 10;
    public $y = 20;

    public function add()
    {
        echo $this->x + $this->y;
    }
    public abstract function text(); //abstract class function er body thakbe na
}