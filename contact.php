
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="only screen and (max-device-width: 680px)" href="small.css">
    <link rel="stylesheet" media="only screen and (max-device-width: 480px)" href="small_l.css">
    <link rel="stylesheet" media="only screen and (min-width: 1024px)" href="music.css">
</style>
</head>

<body>
<?php include 'navigation.php';
if(isset($_SESSION)) session_start();

if (isset($_POST['firstname'], $_POST['lastname'], $_POST['email'])){
    $error = array();
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];


    if(empty($firstname) || empty($lastname) || empty($email)){
        $error["firstname"] = 'Please fill out the required fields *.';
    }else{

    if (!preg_match("/^[_a-zA-Z0-9-]+(\.[_a-zA-Z0-9-]+)*@[a-zA-Z0-9-]+(\.[a-zA-Z0-9-]+)*(\.[a-zA-Z]{2,3})$/", $email)) {
        $error["email"] = 'Invalid email address.';
    }
}


if(!empty($error)){
    foreach ($error as $err){
         echo "$err <br />";
    }
}else{

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

pg_close();
header('Location: /add.php');   
}


}
?>
<div id="content">
<h1>Contact Amy 3:</h1>
 
 <form action="<?php echo htmlentities( $_SERVER['PHP_SELF'] );?>" method="post">

    <div class="formalign">
    <label>* First Name:</label><input type="text" maxlength="50" name="firstname" value="<?php if(isset($_POST['firstname'])) {echo htmlspecialchars($_POST['firstname']); }?>" />
    </div>

    <div class="formalign">
        <label>* Last Name:</label><input type="text" maxlength="50" name="lastname" value="<?php if(isset($_POST['lastname'])) {echo htmlspecialchars($_POST['lastname']); }?>">
    </div>

    <div class="formalign">
       <label>* Email:</label><input type="text" maxlength="50" name="email" value="<?php if(isset($_POST['email'])) {echo htmlspecialchars($_POST['email']); }?>">
       
    </div>

    <div class="formalign">
        <label>Comment:</label><textarea name="comment" maxlength="500"></textarea>
    </div>


    <div class="submitBtn">
        <button type="submit" name="submit">Send your message</button>
    </div>
</form>
</div>

<br/><br/><br/><br/>
<div class="footer">
<?php include 'footer.php';?>
</div>

</body>
</html>