<?php
$severname="localhost";
$username="root";
$password="";

$con=new mysqli($severname,$username,$password);

if($con->connect_error){
    die("Connection fail");
}

$sql="CREATE DATABASE mydb";

if($con->query($sql)===true){
    echo "Database created successfully";
}else{
    echo("Database Not created successfully");
}

$con->close();
?>