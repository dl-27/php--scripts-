<?php
// a.php file

session_start();        // start the session

// store session data
$_SESSION['site'] = 'coursesweb.net';
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>a.php</title>
</head>
<body>
This is the "a.php" page<br />

<?php
echo 'Here is defined the session $_SESSION["site"], its value is: '. $_SESSION['site'];
?>

<br /><br />
Link <a href="b.php">to b.php</a>
</body>
</html>