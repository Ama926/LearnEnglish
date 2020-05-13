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
  <title>Grammar Quiz</title>

  <link href ="css/quiz.css" rel ="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<script src="js/grammarquiz.js"></script>
<script type="text/javascript" src="js/javascript.js"></script>
<script type="text/javascript" src="js/login.js"></script>

</head>

<body onload="getuserdetails()" >
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
    <li><input type = "submit"  class = "button" value = "Logout" onclick= "logout();"></li>-->
    <li><a href = "logoutSession.php">Logout</li>  
    </ul>
    </nav>
  </div>
  <center><img src="img/quizbackground.jpg" width="600" height="500"></center>
  <div><h1><font style = "color:rgb(13, 21, 82); font-family:Georgia;"><marquee scrollamount = "10">
   ~~~~~~~ Welcome, <span id="sign"> </span>| LearnEnglish | EnglishHub | Speaking ~~~~~~
 </marquee></font></h1></div><br><br>

 <h1>Please consider you have only 3 attempts for a one logging session</h1>
<form id="quiz" name="quiz">
    <p class = "questions"> 1. How many tenses are there in English?</p>
    <input type="radio" id="rd" name="q1" value="6"> 6 <br>
    <span id="ans1"><input type="radio" id="rd" name="q1" value="12"> 12 <br></span>
    <input type="radio" id="rd" name="q1" value="4"> 4 <br>
    <input type="radio" id="rd" name="q1" value="3"> 3 <br>

    <p class = "questions">2. There are ___ types of aspects in English tense?</p>
    <span id="ans2"><input type="radio" id="rd" name="q2" value="2"> 2 <br></span>
    <input type="radio" id="rd" name="q2" value="3"> 3 <br>
    <input type="radio" id="rd" name="q2" value="4"> 4 <br>
    <input type="radio" id="rd" name="q2" value="6"> 6 <br>

    <p class = "questions"> 3. To talk about thing that happen repeatedly, we use</p>
    <span id="ans3"><input type="radio" id="rd" name="q3" value="simple present tense"> Simple Present Tense <br></span>
    <input type="radio" id="rd" name="q3" value="present continuous tense"> Present Continuous Tense <br>
    <input type="radio" id="rd" name="q3" value="simple past tense"> Simple Past Tense <br>
    <input type="radio" id="rd" name="q3" value="present perfect continuous tense"> Present Perfect Continuous Tense <br>

    <p class = "questions">4. ____ go to school</p>
    <input type="radio" id="rd" name="q4" value="student"> Student <br>
    <span id="ans4"><input type="radio" id="rd" name="q4" value="students"> Students <br></span>
  
    <p class = "questions">5.  "We are playing football now" What is the tense used in here?</p>
    <input type="radio" id="rd" name="q5" value="simple present tense"> Simple Present Tense<br>
    <input type="radio" id="rd" name="q5" value="simple past tense"> Simple Past Tense <br>
    <span id="ans5"><input type="radio" id="rd" name="q5" value="present continuous tense"> Present Continuous Tense <br></span>
    <input type="radio" id="rd" name="q5" value="present perfect continuous tense"> Present Perfect Continuous Tense <br>

    <p class = "questions"> 6. The following phrase indicate future continuous tense. Fill in the blanks<br> I will be ______ in a company next year at this time </p>
    <input type="radio" id="rd" name="q6" value="worked"> worked <br>
    <span id="ans6"><input type="radio" id="rd" name="q6" value="working"> working <br></span>
    <input type="radio" id="rd" name="q6" value="work"> work<br>
   

    <p class = "questions">7.  What is the correct formula of present perfect tense in plural?</p>
    <input type="radio" id="rd" name="q7" value="has + past participle"> has + past participle <br>
    <span id="ans7"><input type="radio" id="rd" name="q7" value="have + past participle"> have + past participle <br></span> 
    <input type="radio" id="rd" name="q7" value="have + v"> have + v <br>
    <input type="radio" id="rd" name="q7" value="have + v+ed">have + v+ed <br>

    <p class = "questions">8.  I will be married by this time next year. What is the tense in here?</p>
    <input type="radio" id="rd" name="q8" value="simple future tense"> Simple Future Tense <br>
    <input type="radio" id="rd" name="q8" value="future continuous tense">Future Continuous Tense <br>
    <span id="ans8"><input type="radio" id="rd" name="q8" value="future perfect tense"> Future Perfect Tense <br></span>
    <input type="radio" id="rd" name="q8" value="future perfect continuous tense"> Future Perfect Continuous Tense<br>

    <p class = "questions">9.  What is the tense that use to describe an activity that started in the past and has recently stopped or just stopped?</p>
    <input type="radio" id="rd" name="q9" value="simple past tense"> Simple Past Tense <br>
    <input type="radio" id="rd" name="q9" value="past continuous tense"> Past Continuous Tense<br>
    <span id="ans9"><input type="radio" id="rd" name="q9" value="present perfect tense"> Present Perfect Tense <br></span>
    <input type="radio" id="rd" name="q9" value="present perfect continuous tense">Presnet Perfect Continuous Tense <br>

    <p class = "questions">10. Correct example for past perfect continuous is: </p>
    <span id="ans10"><input type="radio" id="rd" name="q10" value="She had been waiting for me for 2 hours"> She had been waiting for me for 2 hours <br></span>
    <input type="radio" id="rd" name="q10" value="Mother had tasted the food before she served it "> Mother had tasted the food before she served it  <br>
    <input type="radio" id="rd" name="q10" value=" It was playing with its' toy">  It was playing with its' toy <br>
    <input type="radio" id="rd" name="q10" value="He has been walking along the road for about 20 minutes"> He has been walking along the road for about 20 minutes <br>

   

    <input id = "button" type = "button" value = "I'm finished!" onclick = "check();">
    <input id = "button" type = "button" value = "reset" onclick = "reset();" >

    <div id = "after_submit">
      <p id = "number_correct"></p>
      <p id = "message"></p>
      <img id = "picture">
    </div>
    <table border="1" align="center">
      <tr align="center">
        <td width="500">Attempt</td>
        <td width="500">Score</td>
      </tr>
      <tr align="center">
        <td height="50"><div id="atm1"> </div></td>
        <td><div id="scr1"> </div></td>
      </tr>
      <tr align="center">
        <td height="50" ><div id="atm2"> </div></td>
        <td><div id="scr2"> </div></td>
      </tr>
      <tr align="center">
        <td height="50"><div id="atm3"> </div></td>
        <td><div id="scr3"> </div></td>
      </tr>
    </table>
</form>




<!--<footer class="footer" class="container">
  <p><font color="black">Copyright &copy 2020 LearnEnglish | EnglishHub. All rights reserved.</font></p>
  <p><font color="black">For site suggestions and errors, please send us a Inquiry   |  Powered by A&B softwares 
  </font></p>-->

</body>
</html>