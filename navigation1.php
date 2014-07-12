<!DOCTYPE html>
<html>
<head>
	<style>

	#navi{
	background-color:#6F8CC8;
    height:40px;
	}


   ul#menu li a {

	text-align: center;
	font-weight: bold;
	float: left;
	color: black;
	font-family: Helvetica;
    font-size: 18px;
	text-decoration: none;
	padding-top: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
    padding-right: 20px;
}

 ul#menu li a:hover{
 	color: white;
 }

ul#menu li {
	display: inline; /* Prevents "stepdown" */
} 

.alignRight{
    float: right;
    color: black;
}

.alignLeft {
    float: left;
    color: black;
}
</style>

</head>
<body>

<div id="navi">
	<div id="alignLeft">
		<ul id="menu">
		<li><a href="index.php">Home  </a> </li>
		<li><a href="beat.php">Count the beat </a> </li>
		<li><a href="notes.php">Musical Notes  </a> </li>
		<li><a href="video.php">Video Tutorials  </a> </li>
		<li><a href="download.php">Download  </a> </li>
		<li><a href="contact.php">Contact Us</a> </li>
		</ul>
	</div>
</div>

	<div class="alignRight">
		<?php echo "Today is ". date("d M, Y") . " " . substr(date("l"), 0, 3) . "." ?>
	</div>
</div>
</body>
</html>