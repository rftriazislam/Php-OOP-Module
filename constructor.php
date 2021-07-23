<?php

class  Person{
public $name,$age,$address,$result;
function __construct($name=null,$age=null,$address=null)
{
    $this->name=$name;
    $this->age=$age;
    $this->address=$address;
    
}

function show_info(){
    $this->result= "My Name is ".$this->name." age ".$this->age." address ".$this->address;
    return $this->result;
}

}
$object1=new Person();

$object2=new Person('Riaz Islam',23,"Nikunjo-2");

$object3=new Person('Rafat',24,"Barishal");

echo $object1->show_info()."<br>";
echo $object2->show_info()."<br>";
echo $object3->show_info();


?>