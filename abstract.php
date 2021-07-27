<?php 

abstract class ParantClass{

protected $name ='Riaz Islam';

abstract protected function show();


}

class ChildParant extends ParantClass{

public function show(){
  echo   $this->name;
}
}

$object=new ChildParant();
echo $object->show();


?>