<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="user-scalable=yes" /> <!--, width=device-width-->
	<link rel="stylesheet" type="text/css" href="android.css" media="only screen and (max-width: 480px)" />
	<link rel="stylesheet" type="text/css" href="samsung.css" media="only screen or (max-device-width: 480px)" />
	<link rel="stylesheet" media="only screen and (max-device-width: 480px)" href="small_l.css">
	<link rel="stylesheet" type="text/css" href="music.css" media="only screen and (min-width: 481px)" />
</head>



<body>
<div id="navi">
<div id="header">


<ul>
	<li><a href="index.php">*Home  </a> </li>
	<li><a href="beat.php">*Count the beats </a> </li>
	<li><a href="keyposition.php">*Keys positions  </a> </li>
	<li><a href="readnote.php">*Musical notation  </a> </li>
	<li><a href="quiz.php">*Quizzes </a> </li>
	<li><a href="contact.php">*Contact us </a> </li>
</ul> </div>
	<div id="alignRight">
		<?php echo "Today is ". date("d M, Y") . " " . substr(date("l"), 0, 3) . "." ?>
	</div>
</div></div>

<div id="content">
<h1>Your First Music Lesson:</h1>
<h3>Your Fingers:</h3>
<p>
 * Your thumbs are always the 1st finger. </br>
 * Your index fingers are your 2nd finger. </br>
<img src="resource_music/LelfHandRightHand.jpg" class="ri"></br>
 * Curve your fingers when you rest your fingers on the piano. </br>
 * Keep your nails clean and short! </br></p>

<h3>Piano Sitting Position:</h3>
<p>
 * Sit only half of your seat. </br>
 * Your back should be straight.</br>
 * Both feet flat on the floor.</br></p>

<div class="video">
<!--Add video LH & RH fingering, curve fingers, and sitting position-->

</div>

<p>
Congratulations! You've completed your 1st piano lesson. Isn't it easy? </br>
Now, you're ready to learn the values of the notes. 
Click <a href="beat.php">here</a> to go to the next lesson.</p>
</div>
<div class="footer">
<?php include 'footer.php';?>
</div>

</div>
</body>
</html>