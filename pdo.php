<?php

try{
    $data_base=new PDO('mysql:host=localhost;dbname=admin','root','musfiq9791');
//echo "ugurlu";
}catch (PDOexception $a) {
echo "Xeta kodu / Mellumati : ".$a->getCode()." / ".$a->getMessage();


}




?>
