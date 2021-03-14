<?php
session_start();
require('connection.php');
 if(isset($_POST['user']) && !empty($_POST['user']) AND isset($_POST['pass']) && !empty($_POST['pass'])){
    $User = mysqli_real_escape_string($conn,$_POST['user']);
    $Pass = mysqli_real_escape_string($conn,$_POST['pass']);
$search = mysqli_query($conn,"SELECT user, pass   FROM users WHERE user='$User' AND pass='$Pass'") or die(mysqli_error());
    $counter = mysqli_num_rows($search);
    
   
    
    if($counter>0){
       
       header("location:http://localhost/music/music.php");
}
    else{

        Echo "<Invalid>";
    }
}



?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  
    <style>
      body{
    margin: 0;
    padding:0;
    font-family:Open sans;
    background: url(user1.jpg)no-repeat
    center center fixed;
    background-size: cover;
}

.login-box{
   width: 280px;
   position: absolute;
   top: 50%;
   left: 50%;
   transform: translate(-50%,-50%);
   color: white;
}
.login-box h1{
    float: left;
    font-size: 40px;
    border-bottom: 6px solid;
    margin-bottom: 50px;
    padding: 13px 0;
}
.textbook{
    width: 100%;
    overflow: hidden;
    font-size: 20px;
    padding: 8px 0;
    margin: 8px 0;
    border-bottom: 1px solid ;
      
}
.textbook input{
    border: none;
    outline: none;
    background: none;
    color: white;
    font-size: 18px;
    width: 80%;
    float: left;
    margin: 0 10px;
}
.button{
    width: 100%;
    background: none;
    border: 2px solid;
    color: white;
    padding: 5px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
}
.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
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
<body>

<div class="button1">

    <a href= "admin.php"><button type="submit" class ="button1"><span>Admin</span></button></a>

</div>

<form method = "Post" action="">
  <div class = "login-box">
     <h1>Login</h1>
     <div class = "textbook">
        
        
         <input type = "text" placeholder = "Username" name = "user" value = "">
        </div>
        <div class = "textbook">
         <input type = "password" placeholder = "Password" name = "pass" value = "">
        </div>

        <button  type="submit" class="button"><span>Continue</span></button>
</div> 
</form> 
</body>
</html>