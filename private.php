<?php 

class Base{
private $name; //private property only access construct or public method ;

public function __construct($n)
{
    $this->name=$n;
    // echo $this->name=$n;
}

public function show(){
   echo $this->name;
}

}

$object=new Base('Riaz');
$object->show();

?>