<!DOCTYPE html> 
<html>     
    <head>         
        <title>Record Page</title>    
     </head>   
       <body> 
        <?php include 'connection.php';?> 
        <style>
    .body{
        text-align: center;
        background-color: black;
    }
    div.form
{
    display: block;
    text-align: center;
}
form
{
    display: inline-block;
    margin-left: auto;
    margin-right: auto;
    text-align: left;
}

.para{
    font-family:Open sans;
    font-size: 16px;
    font-style:italic;
    color: white;
}
.label{
    color: white;
    
}

.button{
    font-family:Open sans; 
}


body {
    font-family:Open sans;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #f1f1f1;
}

.sidebar .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color: #111;
  color: white;
  padding: 10px 15px;
  border: none;
  left:40px;
  top:25px;
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 25px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>



<script>

function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
} 

    function display_alert(){
        alert('Data has been inserted successfully');
    }


</script>



</style>

</head>
<body class = "body">


<div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
        <a href="music_folder.php">Display Songs</a>
        <a href="music.php">Home</a>
        <a href="index.php">Logout</a>
       
       
      </div>
      
      <div id="main">
        <button class="openbtn" onclick="openNav()">☰</button>  
     
        
      </div>


<p class = "para">  Singer </P>
    <form  action="" class="form" >            
         <table border = 1>        
                 <tr>            
                     <th><label class="label">Singer_id</label></th>            
                     <td> <input type = "text" name = "id"></td>            
                   </tr>           
                    <tr>           
                         <th><label class="label">Singer_name</label></th>           
                          <td> <input type = "text" name = "name"></td>           
                        </tr> 

</table>  
                  <br>
                        
                        <p  class= "para" style="text-align: center;">Song</P>
                        <table border = 1>        
                 <tr> 
                     <tr>           
                     <th><label class="label">Song_ID</label></th>            
                     <td> <input type = "text" name = "id1"></td>            
                   </tr>           
                    <tr>           
                         <th><label class="label">Song_name</label></th>           
                          <td> <input type = "text" name = "name1"></td>           
                        </tr> 
                        <tr>           
                         <th><label class="label">Singer_ID</label></th>           
                          <td> <input type = "text" name = "id"></td>           
                        </tr> 
                        <tr>           
                         <th><label class="label">Movie_album_id</label></th>           
                          <td> <input type = "text" name = "album1"></td>           
                        </tr> 
                        <tr>           
                         <th><label class="label">Year</label></th>           
                          <td> <input type = "text" name = "year1"></td>           
                        </tr>
                        </table>   
                        <br>

                        <p class= "para" style="text-align: center;" > Movie_album </p>

                        <table border = 1>        
                 <tr> 
                     <tr>           
                     <th><label class="label">Song_ID</label></th>            
                     <td> <input type = "text" name = "id1"></td>            
                   </tr>           
                    <tr>           
                         <th><label class="label">Movie_album_id</label></th>           
                          <td> <input type = "text" name = "album1"></td>           
                        </tr> 
                        <tr>           
                         <th><label class="label">Movie_album_name</label></th>           
                          <td> <input type = "text" name = "name2"></td>           
                        </tr> 
                        <tr>           
                         <th><label class="label">Actor_name</label></th>           
                          <td> <input type = "text" name = "act_name"></td>           
                        </tr> 
                        <tr>           
                         <th><label class="label">Actress_name</label></th>           
                          <td> <input type = "text" name = "act1_name"></td>           
                        </tr>
                        </table> 
                        <br>
                         <p  class= "para" style="text-align: center;">Genre</p>
                         <table border = 1>        
                 <tr> 
                     <tr>           
                     <th><label class="label">Song_ID</label></th>            
                     <td> <input type = "text" name = "id1"></td>            
                   </tr>           
                    <tr>           
                         <th><label class="label">Genre</label></th>           
                          <td> <input type = "text" name = "genre"></td>           
                        </tr>
</table>
                        <br>
                        <p  class= "para" style="text-align: center;">Playlist</p>
                        <table border = 1>        
                 <tr> 
                     <tr>           
                     <th><label class="label">Song_ID</label></th>            
                     <td> <input type = "text" name = "id1"></td>            
                   </tr>           
                    <tr>           
                         <th><label class="label">Singer_ID</label></th>           
                          <td> <input type = "text" name = "id"></td>           
                        </tr>
</table>



<input  type="submit" onclick="display_alert()" value="Click here">








</form>
             




</body>
    </html>

 
<?php 

session_start();
 
error_reporting(0); 
$var = $_GET['id']; 
$var1 = $_GET['name']; 


$var2 = $_GET['id1'];
$var3 = $_GET['name1'];
$var4 = $_GET['id'];
$var5 = $_GET['album1'];
$var6 = $_GET['year1'];


$var7 = $_GET['id1'];
$var8 = $_GET['album1'];
$var9 = $_GET['name2'];
$var10 = $_GET['act_name'];
$var11 = $_GET['act1_name'];


$var12 = $_GET['id1'];
$var13 = $_GET['genre'];


$var14 = $_GET['id1'];
$var15 = $_GET['id'];




 
 
$query  = "INSERT INTO singer VALUES('$var','$var1')"; 


$query1 = "INSERT INTO song VALUES('$var2','$var3','$var4','$var5','$var6')"; 



$query2 = "INSERT INTO  movie_album VALUES('$var7','$var8','$var9','$var10','$var11')";

$query3 = "INSERT INTO genre VALUES('$var12','$var13')";

$query4 = "INSERT INTO playlist VALUES('$var14','$var15')";

$data = mysqli_query($conn,$query); 
$data1  = mysqli_query($conn,$query1);
$data2  = mysqli_query($conn,$query2);
$data3  = mysqli_query($conn,$query3);
$data4  = mysqli_query($conn,$query4);



 
?> 
<?php

error_reporting(0);
include("connection.php");

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
 
 