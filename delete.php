<?php

use LDAP\Result;

include ('connect.php');

$id = $_GET['deleteid'];

$sql="delete from usertable where id = $id";

$result=$con->query($sql);

if($result){
    header('location:data.php');
    
}

?>