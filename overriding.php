<?php

class main{
public $name='main class name = riaz <br>';

public function show(){
    echo 'Method '. $this->name;
}

}

class Child extends Main{  //inherit class 
    public $name='child  class name = riaz <br>';   
    public function show(){
        echo 'Method '. $this->name;
    }
}

// $object=new Main();
$object=new Child();
echo $object->name;

// $object=new Main();
$object=new Child();

$object->show();




?>