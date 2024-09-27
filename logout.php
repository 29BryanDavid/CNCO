<?php
session_start();

session_unset();
session_destroy();
header("location: http://localhost/campusproject/first.html");
exit();

?>