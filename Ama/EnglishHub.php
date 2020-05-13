<?php
    include('session2.php');
    if(!isset($_SESSION['login_user'])){
    header("location:Login.php"); // Redirecting To Home Page
    }
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title> Welcome to EnglishHub</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/login.css">
   <script type="text/javascript" src="js/login.js"></script>
   <script type="text/javascript" src="js/javascript.js"></script>

</head>
<!--<body onload="getuserdetails()">-->
<body>
  <div class="dropdown">
    <nav class="nav" >
      <!--<div align="left"><img class="logo" src="img/logo2.jpg/"></div>-->
     <ul>
     <li><a href="EnglishHub.php"> Home </a></li>
     <li><a href="grammar.php">Grammar</a></li>
     <li><a href="#">Vocabulary</a></li>
     <li><a href="speaking.php">Speaking</a></li>
     <li><a href="#">Writing </a></li>
     <li><a href="minigame.php">Mini games</a></li>
     <li><a href="#">Quizes </a>
    <ul>
      <li><a href="grammarquiz.php">Grammar</a></li>
      <li><a href="speakingquiz.php">Speaking</a></li>
    </ul></li>
      <!--<li><input type = "submit"  class = "button" value = "User Details" onclick= "showuserdetails();"></li>
      <li><input type = "submit"  class = "button" value = "Logout" onclick= "logout();"></li>   -->
     <li><a href = "logoutSession.php">Logout</li>  
    </ul>
    </nav>
  </div>
  
 
  <!-- <center><img src="img/homeimage.png" class="image"></center>-->
   <div align="center"><img src="img/grammar.jpg" width="1100" height="500"></div>

  <div><h2><font style = "color:rgb(4, 33, 61); font-family:Georgia;"><marquee scrollamount = "10">
          ~~~~~~~~~~~ Hello, <span id="sign"> </span> |Welcome to EnglishHub ~~~~~~~~~~
        </marquee></font></h2></div><br><br><br><br><br>
      <!--<form action="login.html">-->
         <form>
          <div class = "intro">
            <p><font style = "color:dodgerblue; font-family:cursive;"><hr>
                 EnglishHub seeks to develop in students a wide range of practical English Communication Skills needed for effective social 
                  interaction in day to day life and work  to achieve this aim EnglishHub provides the participants with interesting learning opportunities to develop their practice in <b>Grammar 
                  ,Vocabulary, Speaking, Listening, Writing, Reading and Leadership and engage in effective, accurate and fluent Communication</b> in different contexts.
                  Our aim is to develop the students' communicative competence in English language skills required for 
                  effective social interaction and employement. 
                  Also we're here to demonstrate the ability to analyze and interpret information in Listening, Speaking, Reading and Writing in different 
                  context with an adequate level of accuracy and fluency.
            </font><hr></p></div>
        </form>
    
  
     <br><br><br><br> <br><br><br>
    <footer class="footer" class="container">
      <p><font color="black">Copyright &copy 2020 LearnEnglish | EnglishHub. All rights reserved.</font></p>
      <p><font color="black">For site suggestions and errors, please send us an Inquiry   |  Powered by A&B softwares 
      </font></p>
    </footer>
</body>
</html>