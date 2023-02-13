<?php
$host="localhost";
$dbname="login_db";
$username="root";
$password="";

$mysqli= new mysqli($host,$username,$password,$dbname);// connect me database

//testimi a po connect mire me data base?
if($mysqli->connect_errno){
    die("DataBase nuk eshte connektuar mire ".$mysqli->connect_errno);
}

return $mysqli;//e kthen qeto
?>