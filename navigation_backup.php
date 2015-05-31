<!DOCTYPE html>
<html>
<head>
	<title>AmyMusic</title>
	<meta name="viewport" content="user-scalable=no, width=device-width" />
	<link rel="stylesheet" type="text/css" href="small.css" media="only screen and (max-width: 480px)" />
	<link rel="stylesheet" type="text/css" href="music.css" media="screen and (min-width: 481px)" />
</head>
<body>
<div id="navi"><!--container-->
	<div id="alignLeft"><!--header-->
		<ul>
		<li><a href="index.php">*Home  </a> </li>
		<li><a href="beat.php">*Count the beats </a> </li>
		<li><a href="keyposition.php">*Keys positions  </a> </li>
		<li><a href="readnote.php">*Musical notation  </a> </li>
		<li><a href="quiz.php">*Quizzes </a> </li>
		<li><a href="contact.php">*Contact us </a> </li>
		</ul>
	</div>
	<div id="alignRight">
		<?php echo "Today is ". date("d M, Y") . " " . substr(date("l"), 0, 3) . "." ?>
	</div>
</div>

	
</div>
</body>
<html>