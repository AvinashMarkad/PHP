<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $x=100;
        $y=200;

        print"value of x: $x <br>";
        print"value of y: $y <br>";

        function addition(){
            $GLOBALS['z']= $GLOBALS['x']+ $GLOBALS['y'];
        }
        addition();
        print"addition of x and y:$z";
    ?>
</body>
</html>