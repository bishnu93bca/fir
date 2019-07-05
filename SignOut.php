<?php
session_start();
session_destroy();
echo "<script>alert('Logout successfully.')</script>";

echo "<script>window.open('index.html','_self')</script>";




?>