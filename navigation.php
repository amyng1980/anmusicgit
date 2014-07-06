<!DOCTYPE html>
<html>
<head>
	<title>Navigation</title>
	<link type="text/css" rel="stylesheet" href="music.css">
</head>
<body>
<div class="navigationHolder">
	<div class="alignLeft">
		<a href="index.php">Home</a> |
		<a href="beat.php">Count the beat</a> | 
		<a href="notes.php">Musical Notes</a> | 
		<a href="video.php">Video Tutorials</a> | 
		<a href="download.php">Download</a> |
		<a href="contact.php">Contact Us</a>
	</div>

	<div class="alignRight">
		<?php echo "Today is ". date("d M, Y") . " " . substr(date("l"), 0, 3) . "." ?>
	</div>
</div>
</body>
<html>