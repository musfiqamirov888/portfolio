<?php
setcookie('giris',$_POST['admin_mail'],strtotime("-2 hours"), '/');
header('location:login.php');
?>