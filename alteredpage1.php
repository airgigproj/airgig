







<html>
<head>
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


<!-- Table for Main Body -->

<a href="logout.php">Logout</a>







</body></html>