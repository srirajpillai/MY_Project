<?php
session_start();
session_destroy();
header("Location: login page modified.html");
exit();
?>