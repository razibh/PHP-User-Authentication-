<?php
$servername="localhost";
$username="root";
$password="";
$dbname="task1";
$sql= new mysqli($servername,$username,$password,$dbname);
if($sql ->connect_error){
    die("Connection filed" .$sql->connect_error);
}
// echo "connection success";
?>