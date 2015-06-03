
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

if (isset($_POST['firstname'], $_POST['lastname'], $_POST['email'])){
    $error = array();
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];


    if(empty($firstname) || empty($lastname) || empty($email)){
        $error["firstname"] = 'Please fill out the required fields *.';
    }else{

    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)) {
        $error["email"] = 'Invalid email address.';
    }
}


if(!empty($error)){
    foreach ($error as $err){
         echo "$err <br />";
    }
}else{
        header('Location: /add.php');   
}
}
?>
<div id="content">
<h1>Contact Amy:</h1>
 
 <form action="<?php echo htmlentities( $_SERVER['PHP_SELF'] );?>" method="post">

    <div class="formalign">
    <label>* First Name1:</label><input type="text" maxlength="50" name="firstname" value="<?php if(isset($_POST['firstname'])) {echo htmlspecialchars($_POST['firstname']); }?>" />
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