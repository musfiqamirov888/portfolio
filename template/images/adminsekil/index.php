<?php
setcookie('giris',$_POST['admin_mail'],strtotime("-1 year"), '/');
header('location:../../../login.php');
?>