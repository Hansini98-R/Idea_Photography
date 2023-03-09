<?php
//Conecting to the the database
$connect=mysqli_connect('localhost','root','rph981013','ideaphotography');

if(!$connect){
    die("Couldnot not connect".mysqli_error());
}


?>