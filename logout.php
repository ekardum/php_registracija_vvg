<meta http-equiv="content-type" content="text/html; charset=utf-8"></meta>
<?php
session_start();
session_destroy();
header('Location: login.php');