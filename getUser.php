<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="form">
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" onsubmit="return validform()" name="myform">
       <div class="dbname">
        <input type="text" name="dbname" placeholder="Enter the DataBase name...">
       </div> 
       <br> 
       <div class="dbname">
       <input type="text" name="dropdb" placeholder="Enter the DataBase name...">
       </div> 
       <br> 
       <div class="table">
        <input type="text" name="table" placeholder="Enter the table name...">
        <br>
        <input type="text" name="coln" placeholder="Enter the col name...">
        <input type="text" name="dtype" placeholder="Enter the DataType name...">
       </div> 
       <br>
       <input type="submit" value="SUBMIT">  
    </form>
    </div>

    <?php

    function createdb(){
        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $dbname=htmlspecialchars($_REQUEST['dbname']);
    
            if(empty($dbname)){
                print "";
            }
            else{
                $severname="localhost";
                $username="root";
                $password="";
    
                $con=new mysqli($severname,$username,$password);
    
                if($con->connect_error){
                    die("Fail");
                }
    
                $sql="CREATE DATABASE $dbname";
    
                if($con->query($sql)===TRUE){
                    print("Successful");
                }else{
                    print"Fail";
                }
                
                $con->close();
            }
          }
      }

      createdb();
      
    function dropdb(){
        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $dropdb=htmlspecialchars($_REQUEST['dropdb']);
    
            if(empty($dropdb)){
                print "";
            }
            else{
                $severname="localhost";
                $username="root";
                $password="";
    
                $con=new mysqli($severname,$username,$password);
    
                if($con->connect_error){
                    die("Fail");
                }
    
                $sql="DROP DATABASE $dropdb";
    
                if($con->query($sql)===TRUE){
                    print("Successful");
                }else{
                    print"Fail";
                }
                
                $con->close();
            }
          }
    }  
    dropdb();

    function createtable(){
        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $table=htmlspecialchars($_REQUEST['table']);
            $dbname=htmlspecialchars($_REQUEST['dbname']);
    
            if(empty($table)){
                print "";
            }
            else{
                $severname="localhost";
                $username="root";
                $password="";
                $dbn="$dbname";
    
                $con=new mysqli($severname,$username,$password,$dbn);
    
                if($con->connect_error){
                    die("Fail");
                }
    
                $sql="create table $table(
                    ID int NOT NULL,
                    PRIMARY KEY (ID)
                );";    
                if($con->query($sql)===TRUE){
                    print("Successful");
                }else{
                    print"Fail";
                }
            
                $con->close();
            }
          }
    }  
    createtable();



    function addcol(){
        if($_SERVER["REQUEST_METHOD"]=="POST"){

            $table=htmlspecialchars($_REQUEST['table']);
            $coln=htmlspecialchars($_REQUEST['coln']);
            $dtype=htmlspecialchars($_REQUEST['dtype']);
    
            if(empty($table)){
                print "";
            }
            else{
                $severname="localhost";
                $username="root";
                $password="";
                
    
                $con=new mysqli($severname,$username,$password);
    
                if($con->connect_error){
                    die("Fail");
                }
    
                $sql="ALTER TABLE $table
                    ADD $coln $dtype;
                );";    
                if($con->query($sql)===TRUE){
                    print("Successful");
                }else{
                    print"Fail";
                }
            
                $con->close();
            }
          }
    }  
    addcol();
    ?>

 <script>
//   function validform(){
//   var dbname=document.myform.dbname.value;
//   var dropdb=document.myform.dropdb.value;
//   var table=document.myform.table.value;

//   if(dbname==null||dbname==""){
//     alert("can't valid null username");
//     return false;
//   }
//   else if(dropdb==null||dropdb==""){
//     alert("can't valid null username");
//     return false;
//   }else if(table==null||table==""){
//     alert("can't valid null username");
//     return false;
//   }
// }
 </script>

</body>
</html>