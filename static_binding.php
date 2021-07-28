<?php 

class MainClass{  //static method this key not support

protected static $name='Riaz';
    public static function show(){
        $name =static::$name;   // main class use static if child class or inherit class property or method 
        echo 'static method ' .$name.'<br>';
        $name =self::$name; // main class use self 
        echo 'self  method ' .$name.'<br>';

    }

}


//inherit class how to use 
class Child extends MainClass{

    protected static $name='Riaz Islam';
}

$object=new Child();
$object->show();


?>