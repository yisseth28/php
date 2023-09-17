<?php
session_start();
session_destroy();
header("location:generador_cont.php");
?>