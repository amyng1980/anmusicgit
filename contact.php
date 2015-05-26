
<!DOCTYPE html>
<html>

<head>
    <title>Navigation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="only screen and (max-device-width: 800px)" href="small.css">

    <link rel="stylesheet" media="only screen and (min-width: 1024px)" href="music.css"> 
        <style type="text/css">
    label{
    display: inline-block;
    float: left;
    clear: left;
    width: 250px;
    text-align: left;
}
input {
  display: inline-block;
  float: center;
}

input:focus, textarea:focus {
    /* To give a little highlight on active elements */
    border-color: #000;
    background-color: #BFD4FF;
}

textarea {
    /* To properly align multiline text fields with their labels */
    vertical-align: top;

    /* To give enough room to type some text */
    height: 5em;

    /* To allow users to resize any textarea vertically
       It does not work on every browsers */
    resize: vertical;
}

</style>
</head>

<body>
<!DOCTYPE html>
<html>
<head>
    <title>Navigation</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="all and (orientation:portrait)" href="small.css">
    <link rel="stylesheet" media="all and (orientation:landscape)" href="small_l.css">
    <link rel="stylesheet" media="only screen and (min-width: 1024px)" href="music.css">
</head>
<body>
<div id="navi">
    <div id="alignLeft">
        <ul id="menu">
        <li><a href="index.php">*Home  </a> </li>
        <li><a href="beat.php">*Count the beats </a> </li>
        <li><a href="keyposition.php">*Keys positions  </a> </li>
        <li><a href="readnote.php">*Musical notation  </a> </li>
        <li><a href="quiz.php">*Quizzes </a> </li>
        <li><a href="contact.php">*Contact us </a> </li>
        </ul>
    </div>
    <div id="alignRight">
        Today is 25 May, 2015 Mon.  </div>
</div>

    
</div>
</body>
<html>
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

<div class="footerholder">
<div class="footer">
Copyright 2014-2015 by Amy Ng. All Rights Reserved.</div>
</div>
</body>
</html>