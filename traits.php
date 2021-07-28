<?php 

trait hellow{

    public function show(){
        echo 'tarits say hellow <br>';
    }
    public function trait_show(){
        echo 'trait_show say hellow <br>';
    }
}

trait something{

    public function new(){
        echo ' multi tarits say hellow <br>';
    }
}
class A{
    use hellow,something;
}
class B{
    use hellow;
}

class C{
    use hellow;
}


$object=new A();
$object->show();
$object->new();
$object->trait_show();

$object=new B();
$object->show();
$object=new C();
$object->show();
?>