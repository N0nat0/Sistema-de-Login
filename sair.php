<?php
if (!isset($_SESSION)) session_start();
session_destroy();

echo "<script language='javascript' type='text/javascript'>
        alert('Você saiu do login');
        window.location.href='index.php';</script>";


