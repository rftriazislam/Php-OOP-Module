<?php

namespace stu{ // namespace 2nd type use

class student{




public function __construct()
{

    $object =new \tea\teacher();
    echo '<br> calling student class <br>'. $object->teacher_info().'<br>';
    //  echo 'student class<br> '; 
}

public function student_info(){

    echo 'student info ,<br> name = Riaz , age = 23, class = 12';
}

}

}

?>