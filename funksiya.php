<?php
include 'pdo.php';
date_default_timezone_set('Asia/baku');
//admin  esasin girisi
if(isset($_POST['admin_mail'])){
        $admin_yoxla=$data_base->prepare('SELECT * FROM adminesas where
        adminmail=:a and adminpassword=:b
        ');
    $admin_yoxla->execute(array(
        'a'=>$_POST['admin_mail'],
        'b'=>$_POST['admin_password']
    ));
    
   


$giris_yoxla=$admin_yoxla->RowCount();

if($giris_yoxla==1){
    
setcookie('giris',$_POST['admin_mail'],strtotime("+2 hours"), '/');
    echo true;
}else{
    
    echo false;
}

}
//admin giris--2 nin qeydiyyati
if(isset($_POST['admin2-mail'])){
    $admin2=$data_base->prepare('SELECT * FROM adminesas where adminmail=:a');
    $admin2->execute(array(
        'a'=>$_POST['admin2-mail']
    ));
    $admin2_say=$admin2->rowCount();
    if($admin2_say==1){
        echo 'giris var';
    }else{
        $admin_qeydiyyat=$data_base->prepare('INSERT INTO adminesas set
        adminname=:a,
        adminmail=:b,
        adminpassword=:c
        ');
        $admin_qeydiyyat->execute(array(
            'a'=>$_POST['admin2-name'],
            'b'=>$_POST['admin2-mail'],
            'c'=>$_POST['admin2-password']
        ));
        $adminsay_yoxla=$data_base->prepare('SELECT * FROM adminesas');
        $adminsay_yoxla->execute(array());
        $admin_say=$adminsay_yoxla->rowCount();
        if($admin_qeydiyyat){
            echo 'alindi';
        }
    }
}
//  panel tenzimlemelerde adminleri silmek
if(isset($_POST['admin_id'])){
    $delete=$data_base->prepare('DELETE FROM adminesas where
    adminid=:a
    ');
    $delete->execute(array(
      'a'=>$_POST['admin_id']
  
    ));
    if($delete){
      echo 1;
    }else{
        echo 2;
    }
  
  }
  //  panel tenzimlemelerde tenzimlemeler melumatlari modala cagirmag hissesi
  if(isset($_POST['admin_id2'])){
      $oxu=$data_base->prepare('SELECT * FROM adminesas where adminid=:a ');
      $oxu->execute(array(
          'a'=>$_POST['admin_id2']
      ));


      $getir=$oxu->FETCH(PDO::FETCH_ASSOC);

      $melumatlar=array(
          'admin2name'=>$getir['adminname'],
          'admin2mail'=>$getir['adminmail'],
          'admin2password'=>$getir['adminpassword'],
          'admin2photo'=>$getir['adminphoto'],

      );
echo json_encode($melumatlar);

  }
  //  panel tenzimlemelerde cagrilimiw melumatlari yeniden yazdirmag hissesi
  if(isset($_POST['edit_id_input'])){

        $a=$data_base->prepare('UPDATE  adminesas set
        adminname=:a,
        adminmail=:b,
        adminpassword=:c
        where adminid=:d
       ');
       
       $a->execute(array(
         "d"=>$_POST['edit_id_input'],
          "a"=>$_POST['name_edit'],
          "b"=>$_POST['mail_edit'],
          "c"=>$_POST['password_edit']
         
       ));

if($a){
    header('location:template/panel_tenzimlemeler.php');
}else {
    echo 'prablem var';
}

}
//wkdjcwnd
  if(isset($_POST['edit_id_input'])){

  
    
        $file=$_FILES['photo_edit'];
        $fileName=$file['name'];
        $fileType=$file['type'];
        $fileSize=$file['size'];
        $fileError=$file['error'];
        $fileTMPNAME=$file['tmp_name'];
        $filezona='template/images/adminsekil/'.$fileName;
        if(move_uploaded_file($fileTMPNAME,$filezona)){
            $a=$data_base->prepare('UPDATE  adminesas set
            adminname=:a,
            adminmail=:b,
            adminpassword=:c,
            adminphoto=:s
            where adminid=:d
           ');
           
           $a->execute(array(
             "d"=>$_POST['edit_id_input'],
              "a"=>$_POST['name_edit'],
              "b"=>$_POST['mail_edit'],
              "c"=>$_POST['password_edit'],
              "s"=>$filezona
           
           ));
        }
     
    




    if($a){
        echo 'alindi';
    }else {
        echo 2;
    }

}

// mesaj elave etmek
if(isset($_POST['formname'])){
$mesaj=$data_base->prepare('INSERT INTO usermessage set 
messagename=:a,
messagephone=:b,
messagemail=:c,
messagemesaj=:d
');
$mesaj->execute(array(
'a'=>$_POST['formname'],
'b'=>$_POST['formtelefon'],
'c'=>$_POST['formmail'],
'd'=>$_POST['formmesaj']
));

}



if($mesaj){
setcookie('girisform',$_POST['messagename'],strtotime("+1 year"), '/');

    echo 70;
}
//modala mesaji elave eltmek
if(isset($_POST['mesajname'])){
    $mesajoxu=$data_base->prepare('SELECT * from usermessage where messagename=:z ');
    $mesajoxu->execute(array(
        'z'=>$_POST['mesajname']
    ));

    $mesajgetir=$mesajoxu->FETCH(PDO::FETCH_ASSOC);
    $mesajlar=array(
        'mesaj2name'=>$mesajgetir['messagemesaj']
        

    );
echo json_encode($mesajlar);

}

// mesaja cavab gondermek hissesi
if(isset($_POST['edit_id_mesaj'])){
   
    $gonder=$data_base->prepare('UPDATE usermessage set
    messagegedenmesaj=:a
     where messagename=:d
    ');
    
    $gonder->execute(array(
      "d"=>$_POST['edit_id_mesaj'],
       "a"=>$_POST['formgedenmesaj']
      
    ));
    /*if($gonder){
        echo 1;
    }*/
}

// yaradilan mesaji maila gondermek hissesi
if(isset($_POST['edit_id_mesaj'])){
    $maila_gonder=$data_base->prepare('SELECT * FROM usermessage where messagename=:a');
    $maila_gonder->execute(array(
        'a'=>$_POST['edit_id_mesaj']
    ));

 $gonder_yoxla=$maila_gonder->FETCH(PDO::FETCH_ASSOC);

require("phpmailer/class.phpmailer.php");
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
$mail->SetFrom("hello@nurlukargo.az", "Müşfiq Əmirov"); 
$mail->AddAddress($gonder_yoxla['messagemail']);  
$mail->Subject = "Yeni mesaj"; 
$mail->Body ='sizin mesajiniz::--> '.' '.$_POST['formgelenmesaj'].' <br><br> <br>  '.$_POST['formgedenmesaj']; 
if(!$mail->Send()){
    echo "Email Gönderim Hatasi: ".$mail->ErrorInfo;
} else{
    $msj_gonder=$data_base->prepare('UPDATE usermessage set messagestatus=:x where messagename=:z');
    $msj_gonder->execute(array(
        'x'=>1,
        'z'=>$_POST['edit_id_mesaj']
    ));
    echo 1;
}
}

// messagde mesaji silmek hissesi
if(isset($_POST['mesaj_silmek'])){
    $mesajsilmek=$data_base->prepare('DELETE FROM usermessage where messagename=:a');
    $mesajsilmek->execute(array(
        'a'=>$_POST['mesaj_silmek']
    ));
    if($mesajsilmek){
        echo 1;
    }
}
//potfolio modal melumat silmek
if(isset($_POST['navbarsilmek'])){
    $navsil=$data_base->prepare('DELETE FROM add_navbar where text=:a');
    $navsil->execute(array(
        'a'=>$_POST['navbarsilmek']
    ));
    if($navsil){
        echo 1;
    }else{
        echo 2;
    }
}
//portfolio modal melumat cagirmag
if(isset($_POST['nav_id'])){
$nav_cagir=$data_base->prepare('SELECT * FROM add_navbar where text=:y');
$nav_cagir->execute(array(
    'y'=>$_POST['nav_id']
));

$nav_oxu=$nav_cagir->FETCH(PDO::FETCH_ASSOC);

$nav_melumatlar=array(
    'navmelumat1'=>$nav_oxu['text1'],
    'navmelumat2'=>$nav_oxu['text2'],
    'navmelumat3'=>$nav_oxu['text3'],
    'navmelumat4'=>$nav_oxu['text4'],
    'navmelumat5'=>$nav_oxu['text5'],
    'navmelumat6'=>$nav_oxu['text6'],
    'navmelumat7'=>$nav_oxu['text7']
);
echo json_encode($nav_melumatlar);
}
// portfolio medalda yazilmiw melumatlari yeniden yazdirmag
if(isset($_POST['nav_edit'])){
    $nav_yaz=$data_base->prepare('UPDATE add_navbar set
     text1=:a,
     text2=:c,
     text3=:v,
     text4=:x,
     text5=:s,
     text6=:w,
     text7=:q
     where text=:b');
    $nav_yaz->execute(array(
        'b'=>$_POST['nav_edit'],
        'a'=>$_POST['name_text1'],
        'c'=>$_POST['name_text2'],
        'v'=>$_POST['name_text3'],
        'x'=>$_POST['name_text4'],
        's'=>$_POST['name_text5'],
        'w'=>$_POST['name_text6'],
        'q'=>$_POST['name_text7']
    ));
    if($nav_yaz){
        echo true;
    }else{
        echo false;
    }
}

// slider 1 wekil yuklemek
if(isset($_POST['slider1_hidden'])){
    $newfile=$_FILES['slider1'];
    $filenm=$newfile['name'];
    $filesz=$newfile['size'];
    $filetp=$newfile['type'];
    $fileerr=$newfile['error'];
    $filetpm=$newfile['tmp_name'];
    $date=date('d-m-Y H:m:s');
    $flzona='template/images/slimg/'.rand(0,999999999).date("Y.m.d.H.i.s").$filenm;
    $image=explode('/',$filetp);
    $image_type=$image[1];
    
    if($image_type=='png' || $image_type=='jpeg' || $image_type=='jpg' ){
        if( $filesz<1000000){
            if(move_uploaded_file($filetpm,$flzona)){
                $slider1_yukle=$data_base->prepare('UPDATE add_slider set addslider1=:a where addsliderid=:b');
                $slider1_yukle->execute(array(
                    'a'=>$flzona,
                    'b'=>1
                ));
            }
        }else{
            echo 'olci cox boyukdur';
        }
      
    if($slider1_yukle){
        header('location:template/slider_image.php');
    }else{
        echo 2;
    }
}else{
    echo 'fayl dogru deyil';
};
    
};

// slider 2 wekil yuklemek
if(isset($_POST['slider2_hidden'])){
    $newfile2=$_FILES['slider2'];
    $filenm2=$newfile2['name'];
    $filesz2=$newfile2['size'];
    $filetp2=$newfile2['type'];
    $fileerr2=$newfile2['error'];
    $filetpm2=$newfile2['tmp_name'];
    $date2=date('d-m-Y H:m:s');
    $flzona2='template/images/slimg/'.rand(0,999999999).' '.date("Y.m.d.H.i.s").$filenm2;
    $image2=explode('/',$filetp2);
    $image_type2=$image2[1];
    
    if($image_type2=='png' || $image_type2=='jpeg' || $image_type2=='jpg' ){
        if( $filesz2<1000000){
            if(move_uploaded_file($filetpm2,$flzona2)){
                $slider2_yukle=$data_base->prepare('UPDATE add_slider set addslider2=:a where addsliderid=:b');
                $slider2_yukle->execute(array(
                    'a'=>$flzona2,
                    'b'=>1
                ));
            }
        }else{
            echo 'olci cox boyukdur';
        }
      
    if($slider2_yukle){
        header('location:template/slider_image.php');
    }else{
        echo 2;
    }
}else{
    echo 'fayl dogru deyil';
};
    
};
?>
