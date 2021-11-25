<?php
require_once('functions2.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $people[0]= 12;
        $people[1]= 22;    
        $people[2]= 32;
        $people[3]= 42;
        $people[4]= 11;

        for($i=0; $i< count($people); $i++){
            myDummyFunction($people[$i]);
        }
    ?>
</body>
</html>