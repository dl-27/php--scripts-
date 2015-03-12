<?php
session_start();

unset($_SESSION['name']);           // delete the $_SESSION['name']

session_destroy();                  // remove all current session data
?>