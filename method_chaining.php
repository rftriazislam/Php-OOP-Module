<?php 
class main{
public function first(){
    echo 'first method chaining run <br>';
    return $this;
}
public function second(){
    echo 'second method  chaining run <br>';
    return $this;
}
public function third(){
    echo 'third method chaining run <br>';
}
}

$object=new main();
$object->first()->second()->third();


?>