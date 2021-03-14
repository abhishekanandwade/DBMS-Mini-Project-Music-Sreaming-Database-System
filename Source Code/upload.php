<?php

error_reporting(0);
include("conn.php");

if(isset($_POST['uploads'])){
  
    $id1 = $_POST['id'];
    $file_name = $_FILES['file']['name'];
    $file_type  = $_FILES['file']['type'];

    $temp_name = $_FILES['file']['tmp_name'];
    $file_size = $FILES['file']['size'];
    $file_destination  = "videos/".$file_name;
   if( move_uploaded_file($temp_name,$file_destination)){

    $sql = "INSERT into musics (music_name,song) Values('$id1','$file_name') ";
  

    if(mysqli_query($conn,$sql)){
        echo"<h1>File Uploaded Successfully</h1>";
    }
    else{
        $failed  = "Something is wrong";
    }
}

else{
    echo
    "<h1>Please select  video</h1>";
}
}

?>




<!DOCTYPE html>
<html>
<body>
  <form action=""  method="POST" enctype="multipart/form-data">
  <label>Enter the song name</label>
  <input type ="text" name  = "id"/>
      <input type  ="file" name="file"/>
      
      <input type ="submit" name="uploads"value="UPLOAD"/>
       
</form>


<body>
</html>