<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
    <style>
    body{
            font-size: 22px;
        }
        input[type=number]{
            border: 2px solid grey;
            height: 40px;
            font-size: 15px;
        }
        input[type=submit]{
            width: 20%;
            height: 30px;
            border: 2px solid grey;
            border-radius: 8px;
            margin-right: 5px;
            font-size: 20px;
        }
        </style>
</head>
<body>
    <?php
     $x=$_GET['input'];
     $y='';
     if($x <= 50 & $x >= 1){
         $y= 3.50*$x;    
     }
     else if($x <= 150){
         $y = 4*$x;
     }
     else if ($x <= 250){
        $y= 5.20* $x;
     }
     else if($x > 250){
         $y= $x*6.50;
     }
    ?>
    <form action="" method="GET" >
    <input type="number" name="input" value="<?php $x."units"?>">
    <br>
    <br>
    <input type="submit" name="submit" value="generate bill">
    <br>
    <br>
    bill = <?php echo "$y"."rupees";?>
    </form>
</body>
</html>