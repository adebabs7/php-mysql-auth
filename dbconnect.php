<?php
$username = "root";
$host="localhost";
$password="";
$db="details";
$connection = mysqli_connect($host,$username,$password,$db);
if(!$connection){
    echo "unabe to connect ".mysqli_error();
}

?>