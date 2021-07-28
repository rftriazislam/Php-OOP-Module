<?php 

trait hellow{

    public function show(){
        echo 'tarits say hellow <br>';
    }
    private function trait_show(){  //access moifier 
        echo 'trait_show say hellow <br>';
    }
}

trait something{

    public function show(){
        echo '  tarits say hellow <br>';
    }
}

class base{
    public function show(){
        echo ' main  say hellow <br>';
    }
}

class A extends base{
    use hellow,something{
    hellow::show insteadOf  something; //something trait ignore
    something::show as something_show; //function name chnage 
    hellow::trait_show as public ;//private function change to public 
    hellow::trait_show as public  public_show;//private function change to public and function name chnage 

}
public function show(){
    echo ' chaild say hellow <br>';
}


}

// note : 4 class show function same but when run first run child class then trait class then parent or main class 

//prioty child->trait->main 
//       child   first 
//       trait   2nd 
//       main   3rd 


$object=new A();
$object->show();
$object->something_show();
$object->trait_show();
$object->public_show();

?>