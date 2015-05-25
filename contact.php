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
 
 <form action="add.php" method="post">
    <div>
        <lable for="firstname">First Name:</lable>
        <input type="text" name="firstname" size="40" length="40">
    </div>

    <div>
        <lable for="lastname">Last Name:</lable>
        <input type="text" name="lastname" size="40" length="40">
    </div>

    <div>
        <lable for="email">Email:</label>
        <input type="text" name="email" size="40" length="40">
    </div>

    <div>
        <lable for="comment">Comment:</lable>
        <textarea name="comment" size="600" length="600"></textarea>
    </div>


    <div class="submitBtn">
        <button type="submit" name="submit">Send your message</button>
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