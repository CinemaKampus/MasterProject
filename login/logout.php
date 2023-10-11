<?php
session_start();
unset($_SESSION['nama']);
unset($_SESSION['role']);
session_destroy();
header('Location: ../login/?status=logout');
?>