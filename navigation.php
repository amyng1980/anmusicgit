<!DOCTYPE html>
<html>
<head>
	<title>Navigation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" media="all and (orientation:portrait)" href="small.css">
	<link rel="stylesheet" media="all and (orientation:landscape)" href="small_l.css">
	<link rel="stylesheet" media="only screen and (min-width: 1024px)" href="music.css">
</head>
<body>
<div id="navi">
	<div id="alignLeft">
		<ul id="menu">
		<li><a href="index.php">*Home  </a> </li>
		<li><a href="beat.php">*Count the beats </a> </li>
		<li><a href="keyposition.php">*Keys positions  </a> </li>
		<li><a href="readnote.php">*Musical notation  </a> </li>
		<li><a href="quiz.php">*Quizzes?</a> </li>
		<li><a href="contact.php">*Contact Us</a> </li>
		</ul>
	</div>
	<div id="alignRight">
		<?php echo "Today is ". date("d M, Y") . " " . substr(date("l"), 0, 3) . "." ?>
	</div>
</div>

	
</div>
</body>
<html>