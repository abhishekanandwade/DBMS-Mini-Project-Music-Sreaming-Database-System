<?php
session_start();
?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   
    <link  href = "https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.css"  rel="stylesheet" />
<style>
.body{
    background-color: black;
    font-family:Open sans;
}
img{
    width: 100%;
    min-height: 250px;
}
.main{
 padding: 40px 0;
}
.col-md-3{
    margin-bottom: 40px;
}

.music_collection{
    position: relative;
    display: block;
    border-radius: 7px;
    overflow: hidden;
    box-shadow: 0 15px 35px #3d2173a1;
    transition: all ease 0.4s;
}
.music_collection:hover{
    box-shadow: none;
    transform: scale(0.98) translateY(5px);
}
.h4{
    color: white;
    font-size: 16px;
    text-transform: uppercase;
    margin-top: 15px;
    font-weight: 700;
}
.p{
    color:white;
    font-size: 15px;
}

span{
    color:#000;
    font-size: 16px;
}




.h3{
    font-size: 34px;
    color: white;
    margin-bottom: 34px;
    border-bottom: 4px solid #e6e6e6
    padding-bottom: 15px;


}

.aplayer.aplayer-info.aplayer-controller.aplayer-bar-wrap.aplayer.aplayer-bar.aplayer-loaded{
    background: #e0e0e0;
    height:4px;
}

#aplayer{
    position:fixed;
    bottom:-100%;
    left:0;
    width:100%;
    margin:0;
    box-shadow:0 -2px 2px #dadada;
    background-color :#fff;
    transition: all ease 0.5s;
}

#aplayer.showPlayer{
    bottom:0;
}



body {
    font-family:Calibri;
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
}

.openbtn:hover {
  background-color: #444;
}

#main {
  transition: margin-left .5s;
  padding: 16px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}


input[type=text] {
  width: 130px;
  box-sizing: border-box;
  border: 0px solid #ccc;
  border-radius: 4px;
  font-size: 16px;
  background-color: #333333;
  color:white;
  background-position: 100px 0px; 
  background-repeat: no-repeat;
  padding: 12px 20px 12px 40px;
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
  display:block;
  margin: 0 auto;
}

input[type=text]:focus {
  width: 20%;
 
}
.search{

}


.button{
    width: 5%;
    background: none;
    border: 0.5px solid;
    color: white;
    padding: 0.5px;
    font-size: 18px;
    cursor: pointer;
    margin: 12px 0;
    display:block;
  margin:  auto;
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






</style>  
</head>
  <body class="body">

  <div id="mySidebar" class="sidebar">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">x</a>
        <a href="music_folder.php">Display Songs</a>
        <a href="fav.php">Favourite Songs</a>
        <a href="admin.php">ADMIN PAGE</a>
        <a href="index.php">Log Out</a>
       
       
      </div>
      
      <div id="main" >
        <button class="openbtn" onclick="openNav()">☰</button>  
     
        <form action="search.php" method="POST">
    <label></label>
    <input type  = "text" name="ids" placeholder= "Search.."/>
    <input class ="button" type ="submit" name="fi"value= "Go"/>
    
         </form>

      </div>
   
    <div class = "main">
        <div class = "container">
            <div class="row">
                <div clas="col-md-12">
                    <h3 class = "h3">Songs</h3>
                </div>
                <div class= "col-md-3">
                    <a href = "#" class = "music_collection" data-switch="0">
                        <img src = "images (50).jpeg" alt="">
                    </a>
                    <h4 class="h4">THERE FOR YOU</h4>
                    <p class="p">MARTIN GARRIX & TROVE SIVAN</p>
                </div>
               
                <div class= "col-md-3">
                    <a href = "#" class = "music_collection" data-switch="1">
                        <img src  = "images (51).jpeg" alt="">
                    </a>
                    <h4 class="h4">LISTEN</h4>
                    <p class = "p">DAVID GUETTA</p>
                </div>    
                <div class= "col-md-3">
                    <a href = "#" class = "music_collection" data-switch="2">
                        <img src  = "images (40).jpeg" alt="">
                    </a>
                    <h4 class="h4"> MIDNIGHT MEMORIES</h4>
                    <p class = "p">ONE DIRECTION</p>
                </div>    
                <div class= "col-md-3">
                    <a href = "#" class = "music_collection" data-switch="3">
                        <img src  = "images (45).jpeg" alt="">
                    </a>
                    <h4 class="h4">BABY SHARK</h4>
                    <p class = "p">Baby_shark</p>
                </div> 
                <div class= "col-md-3">
                    <a href = "#" class = "music_collection" data-switch="4">
                        <img src  = "images (48).jpeg" alt="">
                    </a>
                    <h4 class="h4">CHEAP THRILLS</h4>
                    <p class = "p">SIA</p>
                </div>  
                <div class= "col-md-3">
                    <a href = "#" class = "music_collection" >
                        <img src  = "images (46).jpeg" alt="">
                    </a>
                    <h4 class="h4">STARS DANCE</h4>
                    <p class = "p">SELENA GOMEZ</p>
                </div>         
                <div class= "col-md-3">
                    <a href = "#" class = "music_collection" data-switch="5">
                        <img src  = "images (42).jpeg" alt="">
                    </a>
                    <h4 class="h4">KOHINOOR</h4>
                    <p class = "p">DIVINE</p>
                </div>    
                <div class= "col-md-3">
                    <a href = "#" class = "music_collection" data-switch="6">
                        <img src  = "images (47).jpeg" alt="">
                    </a>
                    <h4 class="h4">WOLVES</h4>
                    <p class = "p">SELENA GOMEZ X MARSHMELLO</p>
                </div>   
                
               
               

               
                
            </div>

            <div class = "row">
               <div class = "col-md-12">
                   <h3 class = "h3">Recently Played</h3>
               </div>
               <div class= "col-md-2">
                   <a href = "#" class = "music_collection" data-switch="7">
                       <img src="images (41).jpeg" alt="">  
                    </a>
                     <h4 class = "h4">RED</h4>
                     <P class = "p">TAYLOR SWIFT</P>
                </div>   
                <div class= "col-md-2">
                    <a href = "#" class = "music_collection" >
                        <img src ="images (49).jpeg"  alt="">  
                     </a>
                      <h4 class = "h4">IN THE NAME OF LOVE</h4>
                      <P class = "p">MARTIN GARRIX & BEBE REXHA</P>
                 </div> 
                 <div class= "col-md-2">
                    <a href = "#" class = "music_collection" data-switch="8">
                        <img src="images (39).jpeg" alt="">  
                     </a>
                      <h4 class = "h4">UP ALL NIGHT</h4>
                      <P class = "p">ONE DIRECTION</P>
                 </div> 
                 <div class= "col-md-2">
                    <a href = "#" class = "music_collection" >
                        <img src="images (52).jpeg" alt="">  
                     </a>
                      <h4 class = "h4">CHOCOLATE GIRL</h4>
                      <P class = "p">NEHA SHETTY</P>
                 </div> 
                 <div class= "col-md-3">
                    <a href = "#" class = "music_collection" >
                        <img src  = "rap_god.jpg" alt="">
                    </a>
                    <h4 class = "h4">RAP GOD</h4>
                    <p class = "p">RAP_GOD_2013</p>
                </div> 

                
            </div>

        </div>
    </div>

    
   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <div id="aplayer"></div>

    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js "></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aplayer/1.10.1/APlayer.min.js" integrity="sha512-RWosNnDNw8FxHibJqdFRySIswOUgYhFxnmYO3fp+BgCU7gfo4z0oS7mYFBvaa8qu+axY39BmQOrhW3Tp70XbaQ==" crossorigin="anonymous"></script>"
   <script>
     function openNav() {
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
} 


$(".music_collection").on('click',function(e){
var dataSwitchid = $(this).attr('data-switch');
ap.list.switch(dataSwitchid);
ap.play();
$("#aplayer").addClass('showPlayer');

});

const ap = new APlayer({
    container: document.getElementById('aplayer'),
    listFolded: true,
     audio: [
         {
    name: 'THERE FOR YOU',
    artist: 'MARTIN GARRIX & TROVE SIVAN',
    url: 'Martin Garrix - Animals (Official Video).mp3',
    cover: 'images (50).jpeg'
},

{
    name: 'Listen',
    artist: 'David Guetta',
    url: 'David Guetta - Shot Me Down ft. Skylar Grey (Lyric Video).m4a',
    cover: 'images (51).jpeg'
},

{
    name: 'MIDNIGHT MEMORIES',
    artist: 'ONE DIRECTION',
    url: 'MidnightMemories.mp3',
    cover: 'images (40).jpeg'
},


{
    name: 'Baby Shark',
    artist: 'PingFong',
    url: 'Baby Shark Dance _ Most Viewed Video on YouTube _ PINKFONG Songs for Children.m4a',
    cover: 'images (45).jpeg'
},


{
    name: 'Cheap Thrills',
    artist: 'Sia',
    url: 'Sia - Chandelier (Official Music Video).m4a',
    cover: 'images (48).jpeg'
},

{
    name: 'Kohinoor',
    artist: 'Divine',
    url: 'DIVINE - Kohinoor (Official Music Video).m4a',
    cover: 'images (42).jpeg'
},

{
    name: 'Wolves',
    artist: 'Selana Gomez',
    url: 'Selena Gomez, Marshmello - Wolves.mp3',
    cover: 'images (46).jpeg'
},



{
    name: 'Blank Space',
    artist: 'Taylor Swift',
    url: 'Taylor Swift - Blank Space.m4a',
    cover: 'images (41).jpeg'
},

{
    name: 'Up all night',
    artist: 'One direction',
    url: 'One Direction - What Makes You Beautiful (Official Video).m4a',
    cover: 'images (39).jpeg'
},

]
});  


   </script>
    
  </body>
</html>