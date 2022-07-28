<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        /* text-align: center; */
    }
</style>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<input type="text" placeholder="Enter the number" name="textbox">
</form>
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $a=htmlspecialchars($_REQUEST['textbox']);
   $m=$a;
    for( $i=1;$i<=$a;$i++)  
    {  
        for($j=1;$j<=$m-1;$j++)  
        {  
            printf("&nbsp;&nbsp;");  
        }  
        for( $k=1;$k<=2*$i-1;$k++)  
        {  
          printf("*");  
        }  
        $m--;  
      
       printf("<br>");  
     }  
    
}
?>
</body>
</html>
