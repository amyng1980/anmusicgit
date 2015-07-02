<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="user-scalable=no" /> <!--, width=device-width-->
    <link rel="stylesheet" type="text/css" href="android.css" media="only screen and (max-width: 480px)" />
    <link rel="stylesheet" media="only screen and (max-device-width: 480px)" href="small_l.css">
    <link rel="stylesheet" type="text/css" href="music.css" media="only screen and (min-width: 481px)" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        
        $(document).ready(function(){
            $("button").click(function(){
                $(".mykey").toggle();
            });  
        });
    </script>
</head>

<body>

<?php include 'navigation.php';?>

<div id="content">
<h1>Lesson 3 Outlines:</h1>
<p>
* Learn keys positions on the piano. </br>
* Play 3 music to be familiar with keys positions.

<div id="keyboardChart">
        <h2>Keys Positions Chart:</h2>
        
        <!--<img src="resource_music/pianoKeys.jpg" float="left" class="ri"></br>-->

<!-- Piano 
<div id="2C" class="key white" ><div class="keyname">C</div><div class="kbkeyname">C</div><div class="oN">3</div>-->
<div class="piano">
    <li class="key">
        <span class="white-key" data-key="20" data-note="1C"><span class="mykey"></br></br></br></br></br></br></br>C</span></span>
        <span class="black-key" data-key="81" data-note="1Cs"><span class="mykey"></br></br>C#/</br>Db</span></span>
    </li>
    <li class="key">
        <span class="white-key" data-key="65" data-note="1D"><span class="mykey"></br></br></br></br></br></br></br>D</span></span>
        <span class="black-key" data-key="87" data-note="1Ds"><span class="mykey"></br></br>D#/</br>Eb</span></span>
    </li>
    <li class="key">
        <span class="white-key" data-key="83" data-note="1E"><span class="mykey"></br></br></br></br></br></br></br>E</span></span>
    </li>
    <li class="key">
        <span class="white-key" data-key="68" data-note="1F"><span class="mykey"></br></br></br></br></br></br></br>F</span></span>
        <span class="black-key" data-key="82" data-note="1Fs"><span class="mykey"></br></br>F#/</br>Gb</span></span>
    </li>
    <li class="key">
        <span class="white-key" data-key="70" data-note="1G"><span class="mykey"></br></br></br></br></br></br></br>G</span></span>
        <span class="black-key" data-key="84" data-note="1Gs"><span class="mykey"></br></br>G#/</br>Ab</span></span>
    </li>
    <li class="key">
        <span class="white-key" data-key="71" data-note="2A"><span class="mykey"></br></br></br></br></br></br></br>A</span></span>
        <span class="black-key" data-key="89" data-note="2As"><span class="mykey"></br></br>A#/</br>Bb</span></span>
    </li>
    <li class="key">
        <span class="white-key" data-key="72" data-note="2B"><span class="mykey"></br></br></br></br></br></br></br>B</span></span>
    </li>
    <li class="key">
        <span class="white-key" data-key="74" data-note="2C"><span class="mykey"></br></br></br></br></br></br></br>C</span></span>
        <span class="black-key" data-key="73" data-note="2Cs"><span class="mykey"></br></br>C#/</br>Db</span></span>
    </li>
    <li class="key">
        <span class="white-key" data-key="75" data-note="2D"><span class="mykey"></br></br></br></br></br></br></br>D</span></span>
        <span class="black-key" data-key="79" data-note="2Ds"><span class="mykey"></br></br>D#/</br>Eb</span></span>
    </li>
    <li class="key">
        <span class="white-key" data-key="76" data-note="2E"><span class="mykey"></br></br></br></br></br></br></br>E</span></span>
    </li>
    <li class="key">
        <span class="white-key" data-key="186" data-note="2F"><span class="mykey"></br></br></br></br></br></br></br>F</span></span>
        <span class="black-key" data-key="219" data-note="2Fs"><span class="mykey"></br></br>F#/</br>Gb</span></span>
    </li>
    <li class="key">
        <span class="white-key" data-key="222" data-note="2G"><span class="mykey"></br></br></br></br></br></br></br>G</span></span>
        <span class="black-key" data-key="221" data-note="2Gs"><span class="mykey"></br></br>G#/</br>Ab</span></span>
    </li>
    <li class="key">
        <span class="white-key" data-key="220" data-note="3A"><span class="mykey"></br></br></br></br></br></br></br>A</span></span>
        <span class="black-key" data-key="13" data-note="3As"><span class="mykey"></br></br>A#/</br>Bb</span></span>
    </li>
    <li class="key">
        <span class="white-key" data-key="37" data-note="3B"><span class="mykey"></br></br></br></br></br></br></br>B</span></span>
    </li>
</div>
</br></br>
<button>Show or hide the names of the keys</button></br></br>

<!-- End Piano -->
<script type="text/javascript" src="assets/js/scripts.min.js"></script>

                    
                    <!--<script>
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
                    </script>  -->

        <!--If you don't have a keyboard or piano, you may try this <a href="mypiano/index.html" target="_blank">mini piano</a> and click on the keyboard.-->
        <p>
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
<?php include 'footer.php';?>
</div>

</body>
</html>