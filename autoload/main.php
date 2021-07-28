<?php


 function __autoload($page)
    {
        require $page.".php";
    }

    $object=new first();
    $object=new second();
    $object=new third();


?>