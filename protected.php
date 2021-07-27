<?php

class Base{
protected $name;

public function __construct($n){

    $this->name=$n;
    echo 'This is protected method  <br>' ;

}

protected function show(){
   echo $this->name;
}

}

class Child extends Base{ //inherit class 

public function child_show(){
    echo $this->name;
}
}


$object =new Child('Riaz Islam');
$object->child_show();

?>