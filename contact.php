<!DOCTYPE html>
<html>

<head>
    <title>Navigation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="only screen and (max-device-width: 600px)" href="small.css">

    <link rel="stylesheet" media="only screen and (min-width: 1024px)" href="music.css"> 
</head>

<body>
<?php include 'navigation.php';?>

<div id="content">
        <h1>Contact Amy:</h1>
 
 <form action="thankyou.php" method="post">
    <div>
        <label for="firstName">First Name:</label>
        <input type="text" id="firstname">
    </div>

    <div>
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastname">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="text" id="email">
    </div>

    <div>
        <label for="comment">Comment:</label>
        <textarea id="comment"></textarea>
    </div>


    <div class="submitBtn">
        <button type="submit">Send your message</button>
    </div>
</form>
</div>
<?php
$dbconn = pg_connect("host=ec2-54-204-24-154.compute-1.amazonaws.com
          port=5432
          dbname=dbjod4rptv3953 
          user=ltlvdznvovjwbi
          password=-ZqJ5BlJLigG94kv24HDCF7Cf4
          sslmode=require");




$query = pg_query($dbconn,"INSERT INTO webform(firstName, lastName, email, comment) VALUES ('" . $firstName . "', '" . $lastName . "', '" . $email. "', '" . $comment . "')");

$result->closeCursor();
?>


<div class="footerholder">
<div class="footer">
<?php include 'footer.php';?>
</div>
</div>
</body>
</html>