<?php
// b.php file

session_start();
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>b.php</title>
</head>
<body>
This is b.php page <br />

<?php
echo 'The value of the $_SESSION["site"] is: '. $_SESSION['site'];

// changes the value of $_SESSION['site'] and output it
$_SESSION['site'] = 'www.marplo.net';
echo '<br /> The new $_SESSION["site"] value is: '.$_SESSION['site'];
?>

</body>
</html>