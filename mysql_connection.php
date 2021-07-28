<?php 
$servername="localhost";
$username="root";
$password="";
$databasename="php_oop";

$connection=new mysqli($servername,$username,$password,$databasename);

if($connection->connect_errno){
    die("connection failed " . $connection->connect_errno);
}
$sql="SELECT * FROM students";

$result=$connection->query($sql);

$row = $result->fetch_assoc();

foreach($row  as $single ){
    echo 'result '.$single;
}


?>