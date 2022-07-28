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
        background-color: antiquewhite;
        color: #000;
        font-size: 30px;
    }
    input{
        font-size: 30px;
    }
</style>
<body>
<form   action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
<h1>Choose the option:</h1>
<input type="text" name="a" placeholder="Enter the value of a">
<input type="text" name="b" placeholder="Enter the value of b">
  
    <h3>Press 1.for Addition</h3>
    <h3>Press 2.for Substraction</h3>
    <h3>Press 3.for Multiplication</h3>
    <h3>Press 4.for Division</h3>
    
    <input type="text" name="option" placeholder="Enter the option">
    <input type="submit" value="Submit">
    </form>
     <?php
   
      if($_SERVER["REQUEST_METHOD"]=="POST"){
        $sw=htmlspecialchars($_REQUEST['option']);
        if(isset($sw)){
            print"Feild is Filled !";
        }
        else{
             switch($sw){
                case 1:
                    $a=htmlspecialchars($_REQUEST['a']);
                    $b=htmlspecialchars($_REQUEST['b']);
                    $c=$a+$b;
                    print"Value of a:$a<br>";
                    print"Value of b:$b<br>";
                    print"Addition of a and b: $c";
                    break;
                    case 2:
                        $a=htmlspecialchars($_REQUEST['a']);
                        $b=htmlspecialchars($_REQUEST['b']);
                        $c=$a-$b;
                        print"Value of a:$a<br>";
                        print"Value of b:$b<br>";
                        print"Substraction of a and b: $c";
                        // print"$c";
                        break;
                        case 3:
                            $a=htmlspecialchars($_REQUEST['a']);
                            $b=htmlspecialchars($_REQUEST['b']);
                            $c=$a*$b;
                            print"Value of a:$a<br>";
                            print"Value of b:$b<br>";
                            print"Multiplication of a and b: $c";
                            // print"$c";
                            break;
                            case 4:
                                $a=htmlspecialchars($_REQUEST['a']);
                                $b=htmlspecialchars($_REQUEST['b']);
                                $c=$a/$b;
                                print"Value of a:$a <br>";
                                print"Value of b:$b<br>";
                                print"Division of a and b: $c";
                                // print"$c";
                                break;
                                default:
                                {
                                print"Choose correct option";
                                }
             }
        }
     }

    ?> 
</body>
</html>