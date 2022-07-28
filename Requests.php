<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        text-align: center;
    }
</style>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<label for="Name">USERNAME:</label>
<input type="text" name="username" placeholder="ENTER THE USERNAME"><br><br>
<label for="Name">PASSWORD:</label>
<input type="password" name="password" placeholder="ENTER THE PASSWORD"><br><br>
<input type="submit" value="SUBMIT">
</form>
    <?php
        if ($_SERVER["REQUEST_METHOD"]=="POST"){
            $username=htmlspecialchars($_REQUEST['username']);
            $password=htmlspecialchars($_REQUEST['password']);
            if(empty($username)&&($password)){
                print"username or password is empty";
            }
                else{
                    // print"USERNAME:$username <br> PASSWORD:$password";
                    $ary=array($username,$password);
                    print"USERNAME:$ary[0]<br>PASSWORD:$ary[1]";
                }
            
        }   
    ?>
</body>
</html>