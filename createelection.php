<?php
	$dom = new DOMDocument();
	$dom.load("election.html");
	$filename = $dom.getElementById("eleccomminput");
	
	$myFile = fopen("/Users/dominicjaniszewski/Desktop/CS/html/Pykrosoft/test2.txt 
","r") or die ("Unable to create");
	fwrite($myFile,"test");
	fclose($myFile);
?>