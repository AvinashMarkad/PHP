<?php
include 'connect.php';

$id = $_GET['deleteid'];

$sql = "select * from usertable where id = $id";

$result = $con -> query($sql);

$row = $result -> fetch_assoc() ;

$Name = $row['name'];          
$Email = $row['email'];
$Phone = $row['phone'];
$Password = $row['password'];


if(isset($_POST['submit'])){
  $name=    $_POST['name'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  $password=$_POST['password'];

  $sql = "update `usertable` set
            name = '$name', 
            email = '$email',
            phone = '$phone' ,
            password = '$password'
        where id = $id;";

 $result=mysqli_query($con,$sql);

 if(!$result){
  die(mysqli_error($con));
 } else {
    header('location:data.php');
 }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Login Page</title>
  </head>
  <body>
  <form method="post" class="my-5 mx-5">
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "<?php  echo $Name  ?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "<?php  echo $Email  ?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone no</label>
    <input type="phone" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value = "<?php  echo $Phone  ?>">
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" value = "<?php  echo $Password  ?>">
  </div>
  <button type="submit" class="btn btn-primary" name= "submit" >Update</button>
  <br>
  <br>
  <a href="" class="btn btn-primary">Data</a>
</form>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </body>
</html>