<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sql_injection";

//CONNECTION TO DATABASE
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn)
{
    die("database connection error".mysqli_connect_error());
}

?>