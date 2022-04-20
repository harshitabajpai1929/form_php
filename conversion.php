<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversion subtask</title>
    <style>
        body{
            font-size: 28px;
            text-align: center;
        }
          input[type=text]{
              width: 30%;
              height: 80px;
              border: 2px solid black;
              border-radius: 9px;
              font-size: 28px;
          }
    </style>
</head>
<body>
    <?php
    $result='';
    $minutes='';
    $seconds='';
    $x=1;
  if(isset($_GET['submit1'])){
     $selected_radio = $_GET['radio'];
     if ($selected_radio == 'hrs_to_mins'){

    $n = $_GET['input1'];
        $result= $n*60; 
        $x=" Mins";
    }
   };
   if($selected_radio == 'hrs_to_secs'){
    $seconds='';
    $n = $_GET['input1'];
        $result = $n * 3600; 
        $x=" Seconds";
   };
   ?>
    <form  action="<?php $_SERVER['PHP_SELF'];?>" method ="GET" >

    <input type="text" name= "input1" value="<?php echo $n;?>" Required><br><br>
    <input type="radio" name="radio" value="hrs_to_mins">
    <label for="hours">hours to mins</label><br>
    <input type="radio" name="radio" value="hrs_to_secs">
    <label for="mins">hours to seconds</label><br>
    <input type="text" style="border: 1px solid white; text-align: center;" value="<?php echo $n."hrs="."$result $x";?>"><br>
    <button type="submit" name="submit1" style="text-align: center; width: 30%; height: 80px; border: 2px solid grey; border-radius: 9px; font-size: 28px;" value="convert">convert</button>  
</form>
</body>
</html>