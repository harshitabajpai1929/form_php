<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload IMage</title>
</head>
<body>
    <?php
    $target_file ="uploads/";
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $input1=$_POST['fileToUpload'];
    $uploadOk=1;

   if (isset($_POST['submit'])){
   if ($_FILES["fileToUpload"]["size"] > (2*1024*1024)) {
    echo "Sorry, your file is too large.";
    $uploadOk=0;
    }
    if($imageFileType != "png") {
     echo "Sorry, only PNG files are allowed.";
     $uploadOk=1;
    }
    else {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {
          echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    }
    }
  }
?>
<form action="" method="POST">
  <h3>Select image to upload:</h3>
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  
  <input type="submit" value="Upload Image" name="submit">
</form>
</body>
</html>