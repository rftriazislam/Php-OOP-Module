
<?php 

class Calculation{   //class create 

   public $a,$b,$c;

   function sum(){
       $this->c=$this->a+$this->b ;
       return $this->c;
   }
   function sub(){
    $this->c=$this->a-$this->b ;
    return $this->c;
   }
   function mult(){
    $this->c=$this->a*$this->b ;
    return $this->c;
   }
}
echo "Example 1 <br>";

$object1=new Calculation(); // Object define then calling
$object1->a=10;
$object1->b=10;
echo "This value are ".$object1->a." and ".$object1->b." sum =".$object1->sum()."<br>";
echo "This value are ".$object1->a." and ".$object1->b." sub =".$object1->sub()."<br>";
echo "This value are ".$object1->a." and ".$object1->b." mult =".$object1->mult()."<br>";

echo "Example 2 <br>";

$object2=new Calculation(); // Object define then calling
$object2->a=50;
$object2->b=60;

echo "This value are ".$object2->a." and ".$object2->b." sum =".$object2->sum()."<br>";
echo "This value are ".$object2->a." and ".$object2->b." sub =".$object2->sub()."<br>";
echo "This value are ".$object2->a." and ".$object2->b." mult =".$object2->mult()."<br>";
?>