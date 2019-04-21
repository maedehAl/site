<?php
//session_start();

$servername="localhost";
$username="root";
$password="";
$dbname="cargame";
try{
    $conn=new PDO("mysql:host=$servername;dbname=$dbname",$username,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    echo "success";



}

catch (PDOEXCEPTION $e){
echo"error". $e->getMessage();
}
//$conn=null;
