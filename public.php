<?php

class Base
{

    public $name;

    public function __construct($n)
    {

        $this->name = $n;
        echo 'This is construct  function run <br>';
    }
    public function show()
    {
        echo $this->name;
    }
}
$object = new Base('riaz');
$object->name = "Riaz islam";
$object->show();
