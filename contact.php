
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
<?php include 'navigation.php';?>
<div id="content">
<h1>Contact Amy:</h1>
 
 <form action="add.php" method="post">
    <div class="formalign">
    <label>First Name:</label><input type="text" name="firstname">
    </div>

    <div class="formalign">
        <label>Last Name:</label><input type="text" name="lastname">
    </div>

    <div class="formalign">
       <label>Email:</label><input type="text" name="email">
    </div>

    <div class="formalign">
        <label>Comment:</label><textarea name="comment"></textarea>
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