<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator using php</title>
    <a href="conversion.php"></a>
    <a href="area.php"></a>
    <a href="uploadimg.php"></a>
    

    <style>
        body{
            font-size: 28px;
        }
        input [type="number"]{
            border: 2px solid grey;
            height: 70px;
            font-size: 28px;
        }
        #adding{
            margin-left: 68px;
        }
        button{
            width: 41px;
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
       $n1 = $_GET['number1'];
       $n2 = $_GET['number2'];
       $operator = $_GET['operator'];
       $result = '';
    switch ($operator) {
        case 'add':
            $result = $n1 + $n2;
            break;
        case 'subtract':
            $result = $n1 - $n2;  
            break;
        case 'multiply':
            $result = $n1 * $n2;
           break;
         case 'divide': 
            $result = $n1 / $n2;
    }   
    ?>
    <form method ="GET" action="<?php $_SERVER['PHP_SELF'];?>" >
    <b>Number 1</b> <b><input type="number" name="number1" value="<?php echo $n1; ?>" Required /><br>
    <b>Number 2 </b><input type="number" name="number2" value="<?php echo $n2; ?>" Required /><br>
    <b>Result</b> <input type="number" name="result" value="<?php echo $result; ?>" /><br>
    <button value="add" name="operator" id="adding"><b>+</b></button ><button value="subtract" name="operator"><b>-</b></button ><button value="multiply" name="operator" ><b>*</b></button><button value="divide" name="operator"><b>/</b></button>
    </form>
</body>
</html>