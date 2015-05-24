<!DOCTYPE html>
<html>

<head>
    <title>Navigation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="only screen and (max-device-width: 800px)" href="small.css">

    <link rel="stylesheet" media="only screen and (min-width: 1024px)" href="music.css"> 
</head>

<body>
<?php include 'navigation.php';?>

<div id="content">
        <h1>Contact Amy:</h1>
 
 <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    <div>
        <label for="firstName">First Name:</label>
        <input type="text" id="firstname" size="40" length="40">
    </div>

    <div>
        <label for="lastName">Last Name:</label>
        <input type="text" id="lastname" size="40" length="40">
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="text" id="email" size="40" length="40">
    </div>

    <div>
        <label for="comment">Comment:</label>
        <textarea id="comment" size="600" length="600"></textarea>
    </div>


    <div class="submitBtn">
        <button type="submit">Send your message</button>
    </div>
</form>
</div>
<?php
if ($_POST['submit']) {
$dbconn = pg_connect("host=ec2-54-204-24-154.compute-1.amazonaws.com dbname=dbjod4rptv3953 user=ltlvdznvovjwbi password=-ZqJ5BlJLigG94kv24HDCF7Cf4");

$firstname = pg_escape_string($_POST['firstname']); 
$lastname = pg_escape_string($_POST['lastname']); 
$email = pg_escape_string($_POST['email']); 
$comment = pg_escape_string($_POST['comment']); 
$sql = "INSERT INTO webform(firstName, lastName, email, comment) VALUES ('$firstName', '$lastName', '$email', '$comment')";

$result = pg_query($dbconn, $sql);

 if (!$result) {
        die("Error in SQL query: " . pg_last_error());
    }

    echo "Thank you!";


//var_dump($result);
pg_close($dbconn);
//$result->closeCursor();
}
?>


<div class="footerholder">
<div class="footer">
<?php include 'footer.php';?>
</div>
</div>
</body>
</html>