<?php 

function sum(int $value){
    echo 'sum is'.$value +10 .'<br>';
}
sum(19);

function array_type(array $value){
    foreach($value as $single_value){
        echo 'array'.$single_value .'<br>'; 
    }
}
array_type(['name','age',2,'goos',6]);


//example 3


class A{
public function hellow(){
    echo 'example 3<br> '; 
    echo 'class A<br>';
}

}

class B{
    public function say(){
        echo 'class B <br>';
    }
    }
function take(A $ob){
        $ob->hellow();
    }
$object=new A();
take($object);


//example 4 

class D{
    public function name(E $ob){
        echo 'example 4 <br> '; 
        $value= $ob->getname();
        foreach($value as $single_value){
            echo 'class  Define '.$single_value .'<br>'; 
        }
    }
    
    }
    
    class E{
        public function getname(){
            return ['riaz','islam','age'];
        }
        }

    $object=new D();
    $object2=new E();
    $object->name($object2) ;


    
    



?>