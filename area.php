<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>area & perimeter using php</title>
    <style>
       
        body{
            font-size: 21px;
        }
        input [type="number"]{
            border: 2px solid grey;
            height: 70px;
            font-size: 28px;
        }
        button{
            width: 25%;
            height: 40px;
            font-size: 18px;
            background-color: lightgrey;
            border: 2px solid black;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <?php
    $input1 =$_GET['input1'];
    $input2 =$_GET['input2'];
    $area='';
    $perimeter='';
         $area = $input1 * $input2;
         $perimeter = 2*($input1 + $input2);
    ?>
    <form method="GET" action="<?php $_SERVER['PHP_SELF'];?>">
     length of rectangle: <input type="text" style="width: 21%; height: 27px; font-size: 18px;" name="input1" value="<?php echo $input1;?>"><br><br>
     width of rectangle: <input type="text"  style="width: 21%; height: 27px; font-size: 18px;" name="input2" value="<?php echo $input2;?>"><br><br>
     <button type="submit" name="btn">calculate area & perimeter </button>
     <div>
         Area is <?php echo "$area";?> sq mtr<br>
         Perimeter is <?php echo "$perimeter";?> mtr
     </div>
    </form>
</body>
</html>