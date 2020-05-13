<?php
    include('session2.php');
    if(!isset($_SESSION['login_user'])){
    header("location:Login.php"); // Redirecting To Home Page
    }
 ?>
<!DOCTYPE html>
<html>
<head>

<title>Speaking Quiz</title>
<link href ="css/quiz.css" rel ="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/style.css">
<script src="js/speakingquiz.js"></script>
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
      ~~~~~~~  Welcome, <span id="sign"> </span> | LearnEnglish | EnglishHub | Quizes | Speaking Quiz ~~~~~~~
     </marquee></font></h1></div><br><br>

<h1>Please consider you have only 3 attempts for a one logging session</h1>
<form id = "quiz" name = "quiz">

<p class = "questions">1. There are ___ parts for a speech</p>
<span  id="ans1"><input type = "radio" id = "rd" name = "question1" value = "8">8 <br></span>
<input type = "radio" id = "rd" name = "question1" value = "6"> 6<br>
<input type = "radio" id = "rd" name = "question1" value = "10"> 10<br>
<input type = "radio" id = "rd" name = "question1" value = "12"> 12<br>

<p class = "questions" >2. What isn't a part of a speech from followings,</p>
<input type = "radio" id = "rd" name = "question2" value = "Adverbs"> Adverbs<br>
<input type = "radio" id = "rd" name = "question2" value = "Interjections"> Interjections<br>
<span id="ans2"><input type = "radio" id = "rd" name = "question2" value = "Articles"> Articles<br></span>
<input type = "radio" id = "rd" name = "question2" value = "Prepositions">Prepositions<br>

<p class = "questions">3. Pronoun is use as a replace for a _____</p>
<span id = "ans3"><input type = "radio"  id="rd" name = "question3" value = "Noun"> Noun<br></span>
<input type = "radio" id = "rd" name = "question3" value = "adverb"> Adverb<br>
<input type = "radio" id = "rd" name = "question3" value = "adjectives"> adjectives<br>
<input type = "radio" id = "rd" name = "question3" value = "Prepositions">Prepositions<br>

<p class = "questions">4. What modifies and describe a verb?</p>
<input type = "radio" id = "rd" name = "question4" value = "Verb"> Verb<br>
<span id="ans4"><input type = "radio" id = "rd"  name = "question4" value = "Adverb"> Adverb<br></span>
<input type = "radio" id = "rd" name = "question4" value = "adjectives"> adjectives<br>
<input type = "radio" id = "rd" name = "question4" value = "Pronoun">Pronoun<br>

<p class = "questions">5. What isn't a adverb</p>
<input type = "radio" id = "rd" name = "question5" value = "Actively"> Actively<br>
<input type = "radio" id = "rd" name = "question5" value = "beautifully"> beautifully<br>
<input type = "radio" id = "rd" name = "question5" value = "well"> well<br>
<span id="ans5"><input type = "radio" id = "rd"  name = "question5" value = "comfortable">comfortable<br></span>

<p class = "questions">6. in, on, under, near, with... These are called as,</p>
<input type = "radio" id = "rd" name = "question6" value = "adjectives"> adjectives<br>
<span id="ans6"><input type = "radio" id = "rd" name = "question6" value = "Prepositions"> Prepositions<br></span>
<input type = "radio" id = "rd" name = "question6" value = "Interjections"> Interjections<br>
<input type = "radio" id = "rd" name = "question6" value = "Articles">Articles<br>

<p class = "questions">7. Conjunctions use to,</p>
<input type = "radio" id = "rd" name = "question7" value = "join nouns"> join nouns<br>
<input type = "radio" id = "rd" name = "question7" value = "join verbs"> join verbs<br>
<input type = "radio" id = "rd" name = "question7" value = "to modify a verb"> to modify a verb<br>
<span id="ans7"><input type = "radio" id = "rd" name = "question7" value = "to joins words, phrases, or clauses">to joins words, phrases, or clauses<br></span>

<p class = "questions">8. To impress emmotions we use,</p>
<input type = "radio" id = "rd" name = "question8" value = "Prepositions"> Prepositions<br>
<input type = "radio" id = "rd" name = "question8" value = "adjectives">adjectives <br>
<input type = "radio" id = "rd" name = "question8" value = "conjunction"> conjunction<br>
<sapn id="ans8"><input type = "radio" id = "rd" name = "question8" value = "Interjection">Interjection<br></sapn>


<p class = "questions">9. Adjective use to</p>
<span id="ans9"><input type = "radio" id = "rd" name = "question9" value = "describe a noun"> describe a noun<br></span>
<input type = "radio" id = "rd" name = "question9" value = "Modifiy a verb">Modifiy a verb <br>
<input type = "radio" id = "rd" name = "question9" value = "Express emotions"> Express emotions<br>
<input type = "radio" id = "rd" name = "question9" value = "Express action">Express action<br>


<p class = "questions">10. Not an example for noun is,</p>
<input type = "radio" id = "rd" name = "question10" value = "person"> person<br>
<input type = "radio" id = "rd" name = "question10" value = "place">place <br>
<span id="ans10"><input type = "radio" id = "rd" name = "question10" value = "place for noun"> place for noun<br></span>
<input type = "radio" id = "rd" name = "question10" value = "idea">idea<br>

<input id = "button" type = "button" value = "I'm finished!" onclick = "check();">
<input id = "button" type = "button" value = "reset" onclick = "reset();" >


<div id = "after_submit">
  <p id = "number_correct"></p>
  <p id = "message"></p>
  <img id = "picture">
</div>

  <br>
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
<br>

  <!--<footer class="footer" class="container">
    <p><font color="black">Copyright &copy 2020 LearnEnglish | EnglishHub. All rights reserved.</font></p>
    <p><font color="black">For site suggestions and errors, please send us a Inquiry   |  Powered by A&B softwares 
    </font></p>-->
</body>
</html>



