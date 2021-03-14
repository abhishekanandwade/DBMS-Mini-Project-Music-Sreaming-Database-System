<!doctype html> 
<html> 
    <head>
        <style>
 body{
    margin: 0;
    padding:0;
    font-family:Open sans;
    background: url(allsongs.jpg)no-repeat
    center center fixed;
    background-size: cover;
}
    

.table
{
   
  margin-left: auto;
  margin-right: auto;
  margin-top:100px;
  color:white;
  font-size: 20px;

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

    <a href= "music.php"><button type="submit" class ="button1"><span>Home</span></button></a>

</div>        
        <table class="table"  >             
            <tr>                 
                                 
                <th style= "color:#ff3333" >Song Name</th>                 
                
                <th style= "color:#ff3333">Year</th> 
</tr> 
 

 
 
 
<?php 
session_start();
include("connection.php"); 
$query  = "SELECT * FROM song  "; 
$data = mysqli_query($conn,$query); 
$total = mysqli_num_rows($data); 
 
 
 
if($total!=0){     
    while($result   = mysqli_fetch_assoc($data))
    {       echo  "<tr>      
       
               
        <td>".$result['Song_name']. "</td>         
        
           <td>".$result['Year']. "</td>  </tr>";    
         } 
 
} 
 
?> 
 
</table> </body> 
 
    </html> 




