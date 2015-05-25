<html> 
    <body> 
<?php
//if ($_POST['submit']) {
$db = pg_connect("host=ec2-54-204-24-154.compute-1.amazonaws.com port=5432 dbname=dbjod4rptv3953 user=ltlvdznvovjwbi password=-ZqJ5BlJLigG94kv24HDCF7Cf4");

$firstname = pg_escape_string($_POST['firstname']); 
$lastname = pg_escape_string($_POST['lastname']); 
$email = pg_escape_string($_POST['email']); 
$comment = pg_escape_string($_POST['comment']); 

$query = "INSERT INTO webform(firstname, lastname, email, comment) VALUES('" . $firstname . "', '" . $lastname . "', '" . $email . "', '" . $comment . "')";

$result = pg_query($db, $query);

 if (!$result) {
  $errormessage = pg_last_error(); 
    echo "Error with query: " . $errormessage; 
    exit(); 
  } 

printf ("These values were inserted into the database - %s %s %s %s", $firstname, $lastname, $email, $comment); 


//var_dump($result);
pg_close();
//$result->closeCursor();
?>

</body>
</html>