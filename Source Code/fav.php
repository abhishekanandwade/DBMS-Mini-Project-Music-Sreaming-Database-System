<!doctype html> 
<html> 
    <head>
        <style>
 body{
    margin: 0;
    padding:0;
    font-family:Open sans;
    background: url(lllike.jpg)no-repeat
    center center fixed;
    background-size: cover;
}
    

.table
{
   
  margin-left: auto;
  margin-right: auto;
  margin-top:100px;
  color:white;

}
            </style>
</head>    
    <body>         
        <table class="table" border = "1">             
            <tr>                 
                <th >Song_ID</th>                 
                <th>Song_name</th>                 
                <th>Singer_ID</th>                 
                <th>Movie_Album_id</th> 
                <th>Year</th> 
</tr> 
 
 
 
 
 
<?php 
include("connection.php"); 
$query  = "SELECT * FROM song  "; 
$data = mysqli_query($conn,$query); 
$total = mysqli_num_rows($data); 
 
 
 
if($total!=0){     
    while($result   = mysqli_fetch_assoc($data))
    {       echo  "<tr>         
        <td>".$result['Song_ID']. "</td>          
        <td>".$result['Song_name']. "</td>         
         <td>".$result['Singer_ID']. "</td>        
           <td>".$result['Movie_album_id']. "</td> 
           <td>".$result['Year']. "</td>  </tr>";    
         } 
 
} 
 
?> 
 
</table> </body> 
 
    </html> 