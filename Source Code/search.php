<head>
<style>
body{
    margin: 0;
    padding:0;
    font-family:Open sans;
    background: url(search1.jpg)no-repeat
    center center fixed;
    background-size: cover;
}
.font{
    font-family:Calibri;
    font-size:20px;
    color:white;
    color:#e60000;
}
.button1{
    position : fixed;
    right : 10px;
    top: 5px;
    background: none;
    border: 2px solid;
    color: white;
   
    font-size: 18px;
    cursor: pointer;
   
}
.button1 span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span {
  padding-right: 25px;
}

.button1:hover span:after {
  opacity: 1;
  right: 0;
}
</style>
</head>
<body class="body" >
<div class="button1">

<a href= "music.php"><button type="submit" class ="button1"><span>Home</span></button></a>

</div>   
<table style="border=5">
    <th class="font"> Song Name</th>
    <th class="font"> Song </th>

<?php
if(isset($_POST['fi'])){
require("connection.php");
$var = $_POST['ids'];
$sql =  "SELECT song from musics where  music_name='$var'";

$qu = mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($qu)){
?>



<tr>

<td style="color:white"><?php echo $row[0];?></td>
<td><audio controls>
    <audio source = "videos/<?php echo $row[0];?>">
    </audio>
</td>

<td> <iframe width = 200 height = 200 src = "videos/<?php echo $row[0];?>">
</iframe>
</td>
</tr>

<?php

}
?>

<?php

}
?>

</table>       
</body>