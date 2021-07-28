<?php 

class MainClass{  //static method this key not support

public static $name='Riaz';
    public static function show(){
        $name =self::$name;   // main class use self
        echo 'static method ' .$name.'<br>';
    }

}
//without object
echo MainClass::$name .'<br>';
MainClass::show();
//with object 
$object=new MainClass();
$object->show();

//inherit class how to use 
class Child extends MainClass{

    public static function child_show(){
        $name =parent::$name;     // inherit class use parent
        echo 'Inherit class static method ' .$name.'<br>';
    }
}
//without object
echo Child::$name .'<br>';
Child::child_show();
//with object 
$object=new Child();
$object->child_show();


?>