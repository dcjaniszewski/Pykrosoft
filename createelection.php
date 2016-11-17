<?php
//libxml_use_internal_errors(true);
$filename = $_GET['input'];
$electionFile = fopen($filename.=".txt","w+"); // change x+ to something that creates, reads and writes.
fclose($electionFile);
?>

<html>
<head>
    <title>Election Created</title>
    <link href = "stylesheet.css" rel = "stylesheet">
</head>
<body>
<form name = "form" action = "createelection.php" method = "GET">
    <div style = "height:600px; width: 500px;">
        <ul>
            <li id = "home"><a href = "mainpage.html">Home</a></li>
            <li id = "news"><a href = "mainpage.html">News</a></li>
            <li id = "prt"><a href = "mainpage.html">PRT Status</a></li>
            <li id = "signout"><a href = "login.html">Sign out</a></li>
        </ul>
        <h1>Election Created</h1>
    </div>
</form>
</body>



</html>

