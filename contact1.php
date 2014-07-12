<!DOCTYPE html>
<html>
<head>
<link type="text/css" rel="stylesheet" href="music.css">

<?php
# This function reads your DATABASE_URL configuration automatically set by Heroku
# the return value is a string that will work with pg_connect
function pg_connection_string() {
  return "dbname=dbjod4rptv3953 host=ec2-54-204-24-154.compute-1.amazonaws.com port=5432 user=ltlvdznvovjwbi password=-ZqJ5BlJLigG94kv24HDCF7Cf4"
}
 
# Establish db connection
$db = pg_connect(pg_connection_string());
if (!$db) {
    echo "Database connection error."
    exit;
}
 
$result = pg_query($db, "SELECT statement goes here");
?>


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
        <label for="mail">Email:</label>
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


<div class="footerholder">
<div class="footer">
<?php include 'footer.php';?>
</div>
</div>
</body>
</html>