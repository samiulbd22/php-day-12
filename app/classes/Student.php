<?php

namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Teacher;
use App\classes\Catagory;

class Student extends Teacher implements ExampleOne,\App\classes\ExampleTwo//parent User and child student polymirism
{
    use Catagory;
    protected $country ='Bangladesh';
    public static $area = 'Farmgate';

    public function __construct()
    {
        $this->name ='Riaz';
        $this->city ='Savar';
    }

    public function manage()
    {
        //echo "the name is $this->name and the city is $this->city and the county is $this->country";
        //echo $this->area;
        echo self::$area;
    }

    public function one()
    {
        echo 'hello One';
    }

    public function two()
    {
        echo 'hello Two';
    }

    public function three()
    {
        echo 'hello Three';
    }

    public function ten()
    {
        // TODO: Implement ten() method.
        echo 'hello ten';
    }

    public function ten1()
    {
        // TODO: Implement ten1() method.
        echo 'hello two';
    }

    public function text()
    {
        echo 'hello test';
    }
    public static function demo()
    {
        echo 'hello demo';
    }
}