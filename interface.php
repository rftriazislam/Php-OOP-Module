<?php
// interface class e object doesn`t exists, property not define only declare method.
interface A 
{

    function name($n);
}
interface B
{
    function info($info);
    function show();
}
interface C
{
    function date();
}

class ChildOrDrived implements A,B,C{
public function name($n){
    echo 'A interface my name is '.$n .'<br>';
}
public function info($n){
    echo 'B interface info is '.$n.'<br>';
}
public function show(){
    echo 'B interface show  function'.'<br>';
}

public function date(){
    $date=date('d D Y h:s:m');
    echo 'c interface date  function  current = '.$date.'<br>';
}
}


$object=new ChildOrDrived();

$object->name('Riaz');
$object->info('age = 20 , born = 1997 ');
$object->show();
$object->date();
