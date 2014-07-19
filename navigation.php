<!DOCTYPE html>
<html>
<head>
	<title>Navigation</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" media="only screen and (max-device-width: 600px)" href="small.css">
	<link rel="stylesheet" media="only screen and (min-width: 1024px)" href="music.css">
</head>
<body>
<div id="navi">
	<div id="alignLeft">
		<ul id="menu">
		<li><a href="index.php">*Home  </a> </li>
		<li><a href="beat.php">*Count the beat </a> </li>
		<li><a href="notes.php">*Musical Notes  </a> </li>
		<li><a href="video.php">*Video Tutorials  </a> </li>
		<li><a href="download.php">*Download  </a> </li>
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