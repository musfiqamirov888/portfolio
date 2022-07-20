<?php
include "../core/core.php";

$gelen_mail=trim(strip_tags($_POST['mailf']));

$mail_yoxla=$db->prepare("SELECT * from admin where email=:email ");

$mail_yoxla->execute(array(
"email"=>$gelen_mail
));



$mail_say=$mail_yoxla->rowCount();



if($mail_say==1){

$new_pass=substr(md5(rand(110,9854546)),0,5);
	$yeni_parol=$db->prepare("UPDATE  admin set pass=:pass where email=:email ");

	$yeni_parol->execute(array(
	"pass"=>md5($new_pass),
	"email"=>$gelen_mail
	));
	




	require("class.phpmailer.php");
	$mail = new PHPMailer();
	$mail->IsSMTP();
	$mail->SMTPDebug = 1;
	$mail->SMTPAuth = true; 
	$mail->SMTPSecure = 'tls'; 
	$mail->Host = "mail.nurlukargo.az"; 
	$mail->Port = 587; 
	$mail->IsHTML(true);
	$mail->SetLanguage("az", "language");
	$mail->CharSet  ="utf-8";
	$mail->Username = "hello@nurlukargo.az"; 
	$mail->Password = "59]sICxY5Bbf"; 
	$mail->SetFrom("hello@nurlukargo.az", "E-Commerce sistem"); 
	$mail->AddAddress($gelen_mail);  
	$mail->Subject = "Yeni parol"; // basliq
	$mail->Body = "Sizin yeni parolunuz : ".$new_pass;  //  mesaj
	if(!$mail->Send()){
		echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
	} else {
		echo 1;
	}


}else {
	echo 2;
}




?>