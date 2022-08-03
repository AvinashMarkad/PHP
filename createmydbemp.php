<?php

$severname="localhost";
$username="root";
$password="";
$dbname="mydb";

$con=new mysqli($severname,$username,$password,$dbname);

if($con->connect_error){
    die("Fail");
}

$sql="create table emp (
         username varchar(30),
         password varchar(12)
);";

if($con->query($sql)===true){
    print("Successful");
}else{
    print"Fail";
}

$con->close();
?>