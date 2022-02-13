<?php

namespace App\classes;

class User
{
    protected $name = 'BITm';
    protected $city = 'Dhaka';

    public function index()
    {
        echo 'Institute name is'.' '.$this->name.'<br/>'.'and city is '.$this->city;
    }
}