<html>
<head>
</head>

<body>
<form  action="" method="GET">
<label>Enter the music id</label>
<input type ="text" name = "id">
<input type="submit" value="Click Here">
</form>

</body>
</html>

<?php
error_reporting(0);
require('connection.php');
if(!empty($_GET['id']) ){
$var = $_GET['id'];
$search = mysqli_query($conn,"SELECT song_name   FROM song WHERE Song_ID=$var") or die(mysqli_error());
while($row=mysqli_fetch_assoc($search)){




    

  $var1 = $_GET['id'];
    $query1  = "INSERT INTO Songs VALUES($var1)";
    $data_data = mysqli_query($conn,$query1); 



}
}
?>