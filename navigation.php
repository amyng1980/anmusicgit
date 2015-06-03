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
		<?php date_default_timezone_set('America/Los_Angeles');
		//date_default_timezone_set('Asia/Hong_Kong');
		
		echo "Today is ". date("d M, Y") . " " . substr(date("l"), 0, 3) . "." ?>
	</div>
</div>

</body>
<html>