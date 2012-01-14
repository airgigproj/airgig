<?php
 session_start();session_destroy();
 session_start();
if($_GET["email_id"] && $_GET["password"] && $_GET["password1"] && $_GET["city"] && $_GET["firstname"] && $_GET["lastname"] && $_GET["birthday"] && $_GET["gender"] && $_GET["education"] && $_GET["occupation"] && $_GET["employer"] )
{
	if($_GET["password"]==$_GET["password1"])
	{
	$servername="localhost";
    $username="naveen";
	$password="mysql";
    $conn=  mysql_connect($servername,$username,$password)or die(mysql_error());
    mysql_select_db("project",$conn);
    $sql="insert into members(email_id,password,city,firstname,lastname,birthday,gender,education,occupation,employer)values('$_GET[email_id]','$_GET[password]','$_GET[city]','$_GET[firstname]','$_GET[lastname]','$_GET[birthday]','$_GET[gender]','$_GET[education]','$_GET[occupation]','$_GET[employer]')";
    $result=mysql_query($sql,$conn) or die(mysql_error());		
    print "<h1>you have registered sucessfully</h1>";
	
	
   
    
	}
	else print "passwords doesnt match";
}
else print"invaild input dasta";

?> 
[<a href="index.php"> CLICK HERE TO GO TO LOGIN PAGE NOW</a>]