<?php

require 'connection_pdo.php';
require 'links.php';
$stmt=$conn->prepare("INSERT INTO userview (name,email,view)  VALUES (:name,:email,:view)");
$stmt->bindParam(':name',$name);
$stmt->bindParam(':email',$email);
$stmt->bindParam(':view',$view);


$name=$_REQUEST['inpName'];
$email=$_REQUEST['inpEmail'];;
$view=$_REQUEST['txtView'];;
$stmt->execute();

$conn=null;

//header("location: contactUsForm.php?submitV=40");

?>

