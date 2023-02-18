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
else
{
    echo " database connected successfully <br> ";
}
// create table
$sql = "CREATE TABLE `sql_injection`.`users` ( `id` INT(3) NOT NULL, `username` VARCHAR(50) NOT NULL , `password` VARCHAR(255) NOT NULL, PRIMARY KEY (`id`))";

$result= mysqli_query($conn,$sql);
if($result){
    echo "Table creation successfull";
}
else{
    echo "Error encountered while creating table".mysqli_connect_error();
}

?>
