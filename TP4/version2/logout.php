<?php
session_start();
session_destroy();
header("Location: http://localhost/semestre1_php/TP4/version2/index.php");
exit();