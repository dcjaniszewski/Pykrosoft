<?php
libxml_use_internal_errors(true);
$id = $_GET['input'];
$id1 = $_GET['input1'];

$filename = $id;
$electioncommissioner = $id1;

$electionFile = fopen($filename.=".txt","w+");
fwrite($electionFile, $electioncommissioner);
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

