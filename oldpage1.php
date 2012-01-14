







<html>
<head>
<title> MY FIRST WEB PAGE</title>
<link rel="stylesheet" type="text/css" href="style.css"/>
</head>

<body>
<?php

// Inialize session
session_start();

// Check, if username session is NOT set then this page will jump to login page
if (!isset($_SESSION['email_id'])) {
header('Location: index.php');
}

?>

<?php 
include ("head.html"); 
?> 
<!-- Table for Main Body -->
<table border="0" width="100%" cellspacing="0" cellpadding="2">
<tr>
<td valign="top" align="left" width="90">
<?php 
include ("menu.html");
?>
</td>
<td width="1" bgcolor="lightskyblue" valign="top">  </td>
<td valign="top">

<?php 
include ("page1body.html"); 
?> 
<br> <br> 
<?php 
include ("menu.html");
?>
</td>
<td width="1" bgcolor="lightskyblue" valign="top">   </td>
</tr></table>

</body></html>