
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="user-scalable=no" /> <!--, width=device-width-->
    <link rel="stylesheet" type="text/css" href="android.css" media="only screen and (max-width: 480px)" />
    <link rel="stylesheet" media="only screen and (max-device-width: 480px)" href="small_l.css">
    <link rel="stylesheet" type="text/css" href="music.css" media="only screen and (min-width: 481px)" />
    <link rel="stylesheet" type="text/css" href="pianomaster/piano.css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $("button").click(function(){
                $("p").toggle();
            });
        });
    </script>
</head>

<body>

<!DOCTYPE html>
<html>
<head>
    <title>AmyMusic</title>
    <meta name="viewport" content="initial-scale=0.9, user-scalable=yes" /> <!--, width=device-width-->
    <link rel="stylesheet" type="text/css" href="android.css" media="only screen and (max-width: 480px)" />
    <link rel="stylesheet" type="text/css" href="samsung.css" media="only screen or (max-device-width: 480px)" />
    <link rel="stylesheet" media="only screen and (max-device-width: 480px)" href="small_l.css">
    <link rel="stylesheet" type="text/css" href="music.css" media="only screen and (min-width: 481px)" />
</head>
<body>
<div id="navi"><!--container-->
    <div id="alignLeft"><!--header-->
        <ul>
        <li><a href="index.php">*Home</a></li>
        <li><a href="beat.php">*Count the beats</a></li>
        <li><a href="keyposition.php">*Keys positions</a></li>
        <li><a href="readnote.php">*Musical notation</a></li>
        <li><a href="quiz.php">*Quizzes</a></li>
        <li><a href="contact.php">*Contact us</a></li>
        </ul>
    </div>
    <div id="alignRight">
        Today is 01 Jul, 2015 Wed.  </div>
</div>

</body>
<html>
<div id="content">
<h1>Lesson 3 Outlines:</h1>
<p>
* Learn keys positions on the piano. </br>
* Play 3 music to be familiar with keys positions.

<div id="keyboardChart">
        <h2>Keys Positions Chart:</h2>
        <!--<img src="resource_music/pianoKeys.jpg" float="left" class="ri"></br>-->
        <div id="piano"> 
        <script src="mypiano/jquery-1.7.1.min.js"></script>
        <script src="mypiano/audio.js"></script>
        <script src="mypiano/piano.js"></script>

        <p id="myLetter"></p>
                    <button>Show or hide the names of the keys</button>  
                    <script>
                    var letters=["C", "D", "E", "F", "G", "A", "B", "C", "D", "E", "F", "G", "A", "B", "C"];
                    var text = "";
                    var i;

                    for(i = 0; i < 5; i++){

                        text += "&#8194;&#8194;" + letters[i] + "&nbsp;&nbsp;&nbsp;&nbsp;&#8194;&#8194;&#8194;" ;
                    }

                    for(i = 5; i < 10; i++){

                        text += "&#8194;&#8194;" + letters[i] + "&nbsp;&nbsp;&nbsp;&#8194;&#8194;&#8194;" ;
                    }
                    
                    for(i = 10; i < letters.length; i++){

                        text += "&nbsp;&#8194;&#8194;" + letters[i] + "&nbsp;&nbsp;&nbsp;&#8194;&#8194;&#8194;" ;
                    }

                    document.getElementById("myLetter").innerHTML = text;
                    </script>  
        </div>

        <!--If you don't have a keyboard or piano, you may try this <a href="mypiano/index.html" target="_blank">mini piano</a> and click on the keyboard.-->
        <p></p>
        <h2>Let's Play Music Letters On The Piano</h2>
        <div id="firstMusic">
        <h3>** Mary Had A Little Lamb **</h3></br>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/PVRavdWnN-0" frameborder="0" allowfullscreen></iframe>
        </div>

    
        <div id="downloadHw">
            <a href="resource_music/maryHadALittleLamb.jpg" download>Download Music Sheet: Mary Had A Little Lamb for Right Hand</a>
        </div>

        <div id="secondMusic">
        <h3>** Little Bee In The Garden **</h3></br>
            <!--Add video-->
        </div>
    

        <div id="downloadHw">
            <a href="resource_music/littleBee_RH.jpg" download>Download Music Sheet: Little Bee In The Garden-Left Hand</a>
        </div>


        <div id="thirdMusic">
        <h3>** Dyno My Pet Dinosaur **</h3></br>
            <!--Add video-->
        </div>


        <div id="downloadHw">
            <a href="resource_music/littleDyno_BothHands.jpg" download>Download Music Sheet: Dyno My Pet Dinosaur-Both Hands</a>
        </div>
</div>

<div></br></br></br></div>

<p>
** Now, you're ready to read notes in lesson 4. </br>
Click <a href="readnote.php">here</a> to start lesson 4.</p>
</div><!--div for div id="content"-->

<div class="footer">
Copyright 2014-2015 by Amy Ng. All Rights Reserved.</div>

</body>
</html>