<?php

class BaseClass{ //main class
    public $name,$age,$phone;

    function __construct($n,$a,$p)
    {
        $this->name=$n;
        $this->age=$a;
        $this->phone=$p;
    }
function maininfo(){
    echo "<h1>Main class info </h1><br>";
    echo "name = ".$this->name."<br>";
    echo "age = ".$this->age."<br>";
    echo "phone = ".$this->phone."<br>";
}

}


class DriveClass extends BaseClass{ // child class 
     public $salary=1000;

    function info(){
    echo "<h1>child class info </h1><br>";

        echo "name = ".$this->name."<br>"; // main class properties use  name
        echo "age = ".$this->age."<br>";// main class properties use  age
        echo "phone = ".$this->phone."<br>";// main class properties use  phone
        echo "salary = ".$this->salary."<br>";// child class properties use  salary

        }
}

// $baseclassObject=new BaseClass('Riaz',23,'01756634400');
// $baseclassObject->info();

$driveclassObject=new DriveClass('Riaz',23,'01756634400');
$driveclassObject->info();

$driveclassObject->maininfo(); // main class method use  maininfo

?>