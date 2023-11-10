<?php

//datasourcename -> dsn : driver + host +dbname

$dsn="mysql:host=db;demo";
$username="root";
$password="password";

try{
    $dbh = new PDO();//Como el jdbc de Java
}catch(\Throwable $th){
    //thor $th;
}