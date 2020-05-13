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
  <title>Grammar&Vocabulary-EnglishHub</title>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/grammarStyle.css">
   <script type="text/javascript" src="js/grammarjavascript.js"> </script>
   <script type="text/javascript" src="js/javascript.js"></script>
   <script type="text/javascript" src="js/login.js"></script>
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
        <li><input type = "submit"  class = "button" value = "User Details"></li>
        <!--<li><input type = "submit"  class = "button" value = "Logout" onclick= "logout();"></li>-->
        <li><a href = "logoutSession.php">Logout</li>  
        </ul>
        </nav>
      </div>
  
       <!--- <div align="center"><img src="img/grammar.jpg" width="1100" height="500"></div>-->
       <center><img src="img/homeimage.png" class="image"></center>
        <br><br>
        <div><h1><font style = "color:rgb(13, 21, 82); font-family:Georgia;"><marquee scrollamount = "10">
           ~~~~~~~~~ Welcome, <span id="sign"> </span>| LearnEnglish | EnglishHub | Speaking ~~~~~~~~~
         </marquee></font></h1></div><br><br>

        <br><br><br><br>
    
    <div class="Grammarintro">
        <h2><hr>Grammar is the way we arrange words to make proper sentences<br>
            Grammar is the system of a language.<br>
            People sometimes describe grammar as the "rules" of a language; but in fact no language has rules<br>
            So think of grammar as something good, something positive, something that you can use to find your way - like a signpost or a map.<br><hr><br><br>
        </h2>       
    </div><br><br><br><br><br>
    <div>
         
        <nav class="nav">
            <ul>
                    <li><a href="#scrollTense">Tenses</a></li>
                    <li><a href="#">Phrases</a></li>
                    <li><a href="#">Clauses</a></li>
                    <li><a href="#">Reported Speech</a></li>
             </ul>
        </nav>
    </div><br><br>
   
    <div id="scrollTense">
        <h1><font style = "color: rgb(20, 6, 102); font-family:cursive; font-size:xx-large;">1. TENSES </font></h1>  
        <table>
            <tr>
                <td width="900" >
                    <ul>
                        <h2>
                           <li>The concept of tense in English is a method that we use to refer to time : <br> past, present and future.</li><br>
                           <li>Many languages use tense to talk about time.</li><br>
                           <li>We cannot talk of tenses without considering two components of <br>many English tenses:<br><br> <u>time</u> 
                        </h2>
                           <ul>
                              <h3><li>Past - before now</li>
                               <li>Present - now, or any time that includes now</li>
                               <li>future - after now</li></h3> 
                               </ul>
                            <h2>and <u>aspect</u></h2></li>
                           <ul>
                             <h3><li>progressive - uncompleted action</li>
                                <li>perfective - completed action or state</li></h3>  
                           </ul>                      
                       </li>
                   </ul> 
                   <br><h3>for more details <a href="https://www.englishclub.com/grammar/tense-what.htm" title="Englishclub.com">Click me </a> <br><br></h3>
                </td>
                <td align="center">
                    <img src="img/conversation.png" width="500" height="360"/>
                </td>
            </tr>
        </table> 

        <table align="center">
            <tr>
                <td width="400" height="75" align="center" id="headingPastTense">PAST TENSE</td>
                <td width="400" align="center"id="headingPresenttTense">PRESENT TENSE</td>
                <td width="400" align="center"id="headingFutureTense">FUTURE TENSE</td>

            </tr>
            <tr>
                <td id="contentPastTense">
                   <ol class="list">
                       <font size="4"><li><a href="#scroll-sim-Pst-tense">Simple Past Tense</a></li>
                        <li><a href="#scroll-past-con-tense">Past Continuous Tense</a></li>
                        <li><a href="#scroll-past-per-tense">Past Perfect Tense</a></li>
                        <li><a href="#scroll-past-per-con-tense">Past perfect Continuous Tense</a></li></font> 
                       </ol>
                </td>
                <td id="contentPresentTense">
                    <ol class="list">
                        <font size="4"><li><a href="#scroll-sim-Pre-tense">Simple Present Tense</a></li>
                            <li><a href="#scroll-pre-con-tense">Present continuous Tense</a></li>
                            <li><a href="#scroll-pre-per-tense">Present Perfect Tense</a></li>
                            <li><a href="#scroll-pre-per-con-tense">Present perfect Continuous Tense</a></li></font>
                    </ol>
                </td>
                <td id="contentFutureTense">
                    <ol class="list">
                        <font size="4"><li><a href="#scroll-sim-fu-tense">Simple Future Tense</a></li>
                            <li><a href="#scroll-fu-con-tense">Future continuous Tense</a></li>
                            <li><a href="#scroll-fu-per-tense">Future Perfect Tense</a></li>
                            <li><a href="#scroll-fu-per-con-tense">Future perfect Continuous Tense</a></li></font>
                    </ol>
                </td>
               
            </tr>
        </table> <br><br>
    
        <!--simple tenses-->
        <div id="bannerST"><h1><font style="color: rgb(79, 9, 126);">SIMPLE TENSES</font> </h1></div> <br>
        <div id="scroll-sim-Pre-tense"><center><h2><font style="color: rgb(79, 9, 126);font-size:larger;"><u>Simple Present Tense</u></font></h2></center></div> 
        <table height="400" width="1200">
            <tr >
                <td  id="SPrT-color-change" width="700" height="200" >
                    <ul  class="description" class="list">
                        <li>To talk of things that happen repeatedly</li>
                        <li>Things you do as habits</li>
                        <li>Something that is true in general</li>
                    </ul>
                   <table>
                        <tr class="category" >
                           <td width="180">Singular</td>
                           <td>Plural</td>
                        </tr>
                        <tr >
                            <td > Subject + Verb</td>
                            <td> Subject + Verb + [s]</td>              
                        </tr>          
                        <tr>
                            <td>The student goes to school</td>
                            <td>The students go to school</td>  
                                       
                        </tr>
                    </table>
                    
                    <br><button onclick="displaySPrTFullex()"class="btn-example" >Show me more examples</button>
                             <h4 id="SPrT"></h4> <br><br>
                </td>
                <td>
                   <div align="right"><img src="img/simple-present.jpg" width="470" height="370"/></div> 
                </td>
            </tr> 
        </table>    
        <hr>
        <div id="scroll-sim-Pst-tense"><center><h2><font style="color: rgb(79, 9, 126);font-size:larger;"><u>Simple Past Tense</u></font></h2></center></div>
        <table class="outline">
            <tr>
                <td>
                    <img src="img/simple-past.jpg">
                </td>
                <td id="SPT-color-change">
                    <ul class="description">
                        <li>To refer things that happened or existed at a particular time in the past</li>
                         <li>We use the past tense forms of the Full Verbs</li>
                         <li>Something that is true in general</li>
                     </ul>
                     <table>
                        <tr class="category">
                            <td>Regular</td>
                            <td>Irregular</td>
                        </tr>
                        <tr class="formula">
                            <td>V + ed</td>
                            <td>V + ___</td>
                        </tr>
                        <tr class="example">
                            <td>kill + ed <br> Hunter Killed a lion</td>
                            <td>take <br> He took a book</td>
                        </tr>
                        <tr>
                            <td ><button onclick="displaySPTFullex()"class="btn-example">Show me more examples</button>
                            <h4 id="SPT"></h4> <br><br></td> <td></td>
                        </tr>
                        </table>
                </td>
                
            </tr>
        </table>
        <hr>
        <div id="scroll-sim-fu-tense"><center><h2><font style="color: rgb(79, 9, 126);font-size:larger;"><u>Simple Future Tense</u></font></h2></center></div>
         <table >
             <tr>
                 <td id="SFT-color-change">
                    <ul>
                        <li class="description">We often need to talk about our future plans or what will happpens in the future.</li>
                        
                     </ul>
                    <table >             
                        <tr class="formula">
                            <td align="center">will + V[infinitive]</td>                     
                        </tr>
                        <tr class="example">
                            <td>We will have a concert at the end of this year<br>
                                  I will come to class tomorrow<br>
                                  I will go out tomorrow</td>                        
                        </tr>
                        <tr>
                            <td >
                              <center><button onclick="displaySFTEx()" class="btn-example">Show me more examples</button>
                                  <h4 id="SFT"></h4> </center>
                            </td>
                        </tr>
                    </table>
                 </td>
                 <td>
                     <img src="img/simple-future.jpg"/>
                 </td>
             </tr>
         </table>
         
          <br><br>
         
          <center><h2><font style="color: rgb(79, 9, 126);"><u>Summary of Simple Tenses</u></font></h2></center>
          <table>
              <tr id="simpleTenses-summary-TR1">
                  <td width="500" height="55">Simple Past tense</td>
                  <td width="500">Simple Present tense</td>
                  <td width="500">Simple Future tense</td>
              </tr>
              <tr id="simpleTenses-summary-TR2">
                  <td height="40">subject + past verb + object</td>
                  <td>subject + present verb + object</td>
                  <td>subject + will + present verb(plural) + object</td>
              </tr>
              <tr id="simpleTenses-summary-TR3">
                  <td height="40">The teacher praised the children</td>
                  <td>The teacher praises the children</td>
                  <td>The teacher will praise the children</td>
              </tr>
          </table>
          <br><br><br>
          <!--continuos tenses-->
          <div id="banner2"><h1><font style="color: rgb(2, 7, 34);">CONTINUOUS TENSES</font> </h1></div> <br>
         <div id="scroll-pre-con-tense"> <center><h2><font style="color: rgb(5, 12, 54);"><u>Present Continuous Tense</u></font></h2></center></div>
          <table align="center">
              <tr>
                  <td width="500" id="PrCT-color-change">
                    <ul><li class="description">To describe planned work and live action</li></ul>
    
                    <table  align="center" >
                        <tr class="category">
                            <td width="250">Singular</td>
                            <td>Plural</td>
                        </tr>
                        <tr class="example">
                            <td>She is cooking dinner now</td>
                            <td>We are studying at the moment</td>
                        </tr>
                        <tr>
                            <td align="center">
                                <br><br><button onclick="displayPrCTEx()"class="btn-example">Show me more examples</button>
                                <div><h4 id="PrCT"></h4> <br><br></div>
                            </td>
                        </tr>
                    </table>
                  </td>
                  <td>
                      <div><img src="img/present-cont.jpg" width="450" height="250"/></div>
                  </td>
              </tr>
          </table>
          <hr>
         
    
          <br><br><div id="scroll-past-con-tense"><center><h2><font style="color: rgb(5, 12, 54);"><u>Past Continuous Tense</u></font></h2></center></div>
          <table align="center">
              <tr>
                  <td>
                      <div><img src="img/past-cont.jpg" width="400"></div>
                  </td>
                  <td id="PCT-color-change" align="center">
                    <ul><li class="description">Use to describe something that was happening at a specif time in the past</li></ul>
                    <table align="center" class="outline">
                        <tr class="category">
                            <td width="250">Singular</td>
                                <td>Plural</td>
                        </tr>
                        <tr class="formula">
                            <td>S + BE + V + ing</h3></td>
                                <td>S + BE + V + ing</td>
                        </tr>
                        <tr class="example">
                            <td>I was talking to my friend</td>
                                <td>The dogs were barking at that time</td>
                        </tr>
                        <tr>
                            <td align="center">
                                <button onclick="displayPCTEx()" class="btn-example"> Show me more examples</button>
                                <h4 id="PCT"></h4>
                            </td>
                        </tr>
                    </table>
                    <br><br>
                  </td>
              </tr>
          </table>
          <hr>
          <div id="scroll-fu-con-tense"><center><h2><font style="color: rgb(5, 12, 54);"><u>Future Continuous Tense</u></font></h2></center></div>
          <table align="center">
              <tr>
                  <td id="FCT-color-change">
                    <ul><li class="description">Use to describe an incomplete action in progress in the future</li></ul>
                    <table>
                        <tr>
                           <h3><td class="formula"> will + be + V + ing</td><br>
                            <t class="example"> I will be doing my degree next year by this time</td></h3> 
                        </tr>
                        <tr>
                            <td align="center">
                                <button onclick="displayFCTEx()" class="btn-example">Show me more examples</button>
                                <h4 id="FCT"></h4>
                            </td>
                        </tr>
                    </table>
                   <br><br>
                     <br><br>
                  </td>
                  <td>
                      <div><img src="img/future-cont.jpg" width="450" height="250"></div>
                  </td>
              </tr>
          </table>       
          <hr>
          <center><h2><font style="color: rgb(5, 12, 54);"><u>Summary of Continuous Tenses</u></font></h2></center>
          <table>
            <tr id="Continuous-summary-TR1">
                <td width="500" height="55">Past Continuous Tense</td>
                <td width="500"> Present Continuous Tense</td>
                <td width="500"> Future Continuous Tense</td>
            </tr>
              <tr id="Continuous-summary-TR2">
                  <td height="40">subject + was/were + present participal + object</td>
                  <td>subject + is/am/are + present participal + object</td>
                  <td>subject + will + be + present participal + object</td>
              </tr>
              <tr id="Continuous-summary-TR3">
                  <td height="40">The teacher is praising the children</td>
                  <td>The teacher was praising the children</td>
                  <td>The teacher will be praising the children</td>
              </tr>
          </table><br><br>
          <hr>
          <!--Perfect tenses-->
          <div id="banner3"><h1><font style="color: rgba(3, 54, 33, 0.767);">PERFECT TENSES</font> </h1></div> <br>
          <div id="scroll-pre-per-tense"><center><h2><font style="color: rgb(6, 126, 70);"><u>Present Perfect Tense</u></font></h2></center></div>
          <table align="center">
              <tr>
                  <td width="800" id="PrPT-color-change">
                    <ul><li class="description">To talk about the things that happened in the recent past and</li>
                        <li class="description">they probably have some connection with the present</li>
                       </ul>
                     <table>
                         <tr class="category">
                             <td width="200" align="center">Singular</td>
                                <td width="200" align="center">Plural</td>
                         </tr>
                         <tr class="formula">
                             <h3><td>has + past participle</td>
                                <td>have + past participle</td></h3>
                         </tr>
                     </table>
                     <br><b><i>Note:</i></b> <em>In spoken English, It's common to use the contractions:</em><br>
                     <br>
                     <table>
                         <tr class="category">
                             <td width="200" align="center">positive:</td>
                                <td width="200" align="center">Negative</td>
                         </tr>
                         <tr class="example" align="center">
                            <h3><td> I have - I've<br>
                                she has - she's</td></h3> 
                               <td>
                                   I have not - I haven't <br>
                                    She has not - she hasn't
                               </td>
                         </tr>
                         <tr>
                             <td align="center">
                                <button onclick="displayPrPTEx()" class="btn-example"> Show me more examples</button>
                                <h4 id="PrPT"></h4> <br><br>
                             </td>
                         </tr>
                     </table>
                  </td>
                  <td>
                      <img src="img/present-perfect.jpg" width="300" height="300"/>
                  </td>
              </tr>
          </table>

          <hr>
          <br><br>   
          <div id="scroll-past-per-tense"><center><h2><font style="color: rgb(6, 126, 70);"><u>Past Perfect Tense</u></font></h2></center></div>
          <table align="center">
              <tr>
                  <td width="400">
                      <img src="img/past-perfect.png" width="350" height="300"/>
                  </td>
                  <td id="PPT-color-change" width="900">
                    <ul>
                            <li class="description">To indicate that one action happend before another action in the past<br>
                                <ul><li class="description-2">You had gone out, when I came to meet you</li></ul><br>
                            </li>
                            <li class="description">We use past perfect to tell what hoped to do, but did not do or happen<br>
                                <ul><li class="description-2">I had wanted to do sciencce, but I did not do sciencce because I didn't have an 'A' for it</li></ul><br>
                            </li>
                            <li class="description">To indicate what happened before a particular time
                            <ul><li class="description-2">I had had my breakfast at 8'o' clock</li></ul>
                            </li>   
                     </ul>
                     <table align="center" border="1">
                        <tr class="category">
                           <br> <td>Positive</td>
                            <br><td>Negative</td>
                        </tr>
                        <tr class="formula">
                           <h3> <td>subject + had + past participle</td>
                            <td>subject + had not + past participle</td></h3>
                        </tr>
                        <tr class="example">
                            <h3><td>She had passed the exam</td>
                                <td>She had  not passed the exam</td></h3>
                        </tr>
                    </table>
                    <br>
                    <div  align="middle">
                        <button onclick="displayPPTEx()" class="btn-example">Show me more examples</button>
                        <h4 id="PPT"></h4>
                    </div>
                    <br><br>
                  </td>
              </tr>
          </table>  <br><br>
          <hr>
          <div id="scroll-fu-per-tense"><center><h2><font style="color: rgb(6, 126, 70);"><u>Future Perfect Tense</u></font></h2></center></div>
          <table align="center">
              <tr>
                  <td width="700" id="FPT-color-change" >
                    <ul>
                        <li class="description">A completed action by a specific time in the future</li></ul><br>
                    <table>
                        <tr>
                            <td>
                                <div class="formula">will + have + V(past participle)</div><br>
                               <div class="example"> I will have got my result by the end of this year</div><br>
                            </td>
                        </tr>
                        <tr>
                            <td align="center">
                                <button onclick="displayFPTEx()" class="btn-example">Click me</button>
                                <h4 id="FPT"></h4> <br><br>
                             </td>
                        </tr>
                    </table>                   
                 </td>
                  <td>
                      <img src="img/future-perfect.jpg" width="450" height="250"/>
                  </td>
              </tr>
          </table>
          <hr>

          <center><h2><font style="color: rgb(6, 126, 70);"><u>Summary of Continuous Tenses</u></font></h2></center>
          <table align="center">
              <tr id="continuous-summary-TR1">
                  <td width="5000" height="55">Past  perfect tense</td>
                  <td width="5000" >Present perfect tense</td>
                  <td width="5000" >Future  perfect tense</td>
              </tr>
              <tr width="500" id="continuous-summary-TR2">
                  <td height="40">subject + had + present participal + object</td>
                  <td>subject + has/have + present participal + object</td>
                  <td>subject + will + have + present participal + object</td>
              </tr>
              <tr width="500" id="continuous-summary-TR3">
                  <td height="40">The teacher had praised the children</td>
                  <td>The teacher has  praised the children</td>
                  <td>The teacher will have praised the children</td>
              </tr>
          </table><hr><br><br>
          <!--Perfect continuous tenses-->
          <div id="banner4"><h1><font style="color: rgb(167, 8, 82);">PERFECT  CONTINUOUS TENSES </font> </h1></div> <br>
          <div id="scroll-pre-per-con-tense"><center><h2><font style="color: rgb(167, 8, 82);"><u>Present Perfect  Continuous Tense</u></font></h2></center></div>
          <table align="center">
              <tr>
                  <td width="650" id="PrPCT-color-change">
                    <ul><li class="description">To describe an activity that started in the past and,
                        <ul>
                            <li>has recently stopped or just stopped</li>
                            <li>is still happening in the present</li>
                            <li>repeated over a period of time</li>
                        </ul>
                    </li></ul>
                    <table>
                        <tr class="category"><td>Singular</td>
                            <td>plural</td>
                           
                        </tr>
                        <tr class="formula"><h3><td>subject + has + been + verb + ing</td>
                            <td>subject + have + been + verb + ing </td></h3>
                            
                        </tr>
                        <tr class="example"><h3> <td>He has been working today <br>It has been raining the whole day today</td>
                            <td>I have been playing football <br> They haven't been living here very long</td></h3>
                           
                        </tr>
                        <tr>
                            <td align="center">
                                <button onclick="displayPrPCT()" class="btn-example">Show me more examples</button>
                                <h4 id="PrPCT"></h4> 
                            </td>
                        </tr>
                    </table>
                  <br><br>
                  </td>
                  <td>
                      <img src="img/past-perf-cont.jpeg" width="300" height="250"/>
                  </td>
              </tr>
          </table>
          <hr>
    
          <div id="scroll-past-per-con-tense"><center><h2><font style="color: rgb(167, 8, 82);"><u>Past Perfect  Continuous Tense</u></font></h2></center></div>
          <table align="center">
              <tr>
                  <td> <img src="img/past-perf-cont.jpeg" width="350"  height="300"/></td>
                  <td  id="PPCT-color-change">
                    <ul>
                        <li class="description">Used to talk about a continued </li>
                            <li class="description">or an ongoing action that started in the past and continued until sometime in the past</li>
                    </ul>
                    <div class="formula">subject + had + been + verb + ing</div><br>
                        <div class="example">she had been practicing for weeks before the concert</div><br>
                    <center><button onclick="displayPPCT()" class="btn-example">Click me</button></center>
                    <h4 id="PPCT"></h4> <br><br> 
                  </td>
              </tr>
          </table>
          <hr>

          <div id="scroll-fu-per-con-tense"><center><h2><font style="color: rgb(167, 8, 82);"><u>Future Perfect  Continuous Tense</u></font></h2></center></div>
          <table align="center">
              <tr>
                  <td width="600"  id="FPCT-color-change">
                    <ul>
                        <li class="description">The activity will have begun sometime in the past, present, or in the future, and is expected to continue in the future.</li> 
                    </ul>
                    <br>
                   <div class="formula">subject + will have + been + present participle + object</div> <br>
                    <div class="example">We will have been shopping in that market before you come home.</div><br>
                    <center><button onclick="displayFPCT()" class="btn-example">Show me more examples</button></center>
                    <h4 id="FPCT"></h4> <br><br>
                  </td>
                  <td>
                      <img src="img/future-perfect-cont.jpg" width="350" height="300"/>
                  </td>
              </tr>
          </table>
               <hr>     
          <center><h2><font style="color: rgb(167, 8, 82);"><u>Summary of Perfect Continuous Tenses</u></font></h2></center>
          <table align="center">
              <tr id="perfectConti-summary-TR1">
                  <td width="500" height="55">Past  perfect continuous tense</td>
                  <td>Present perfect  continuous tense</td>
                  <td>Future  perfect continuous tense</td>
              </tr>
              <tr id="perfectConti-summary-TR2">
                  <td height="40">subject + had + been +  present participal + object</td>
                  <td>subject + has/have + been + present participal + object</td>
                  <td>subject + will + have + been + present participal + object</td>
              </tr>
              <tr id="perfectConti-summary-TR3">
                  <td height="40">The teacher had been praising the children</td>
                  <td>The teacher has  been praising the children</td>
                  <td>The teacher will have been praising the children</td>
              </tr>
          </table>
    </div>
    <br><br><br>
   <div align="middle"><img src="img/tensessummary.jpg" width="900" height="500"/></div>
  
      <footer class="footer" class="container">
        <p><font color="black">Copyright &copy 2020 LearnEnglish | EnglishHub. All rights reserved.</font></p>
        <p><font color="black">For site suggestions and errors, please send us a Inquiry   |  Powered by A&B softwares 
        </font></p>
      </footer>
      
</body>
