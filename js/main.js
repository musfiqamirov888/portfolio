
// admin  giris
$(document).ready(function(){
    // value deyerinin yoxlanmasi
    $('#giris').click(function(){
    var mail_value=$('#mail').val();
    var password_value=$('#password').val();
    if(mail_value.lenght==0 || password_value==0 ){
    
        $('#alert').html('<div class="alert alert-danger">xanalari doldurun!!! !</div>');
    }else{//admin giris yoxlanmasi
        $.ajax({
            type: "post",
            url: "funksiya.php",
            data: $(".admin_giris").serialize(),
            success: function (cavab) {
    if(cavab==false){
        $('#alert').html('<div class="alert alert-danger"><h1>Xeta</h1>.melumatlar yalnisdir</div>');
    }else{
        window.location.href='template/panel.php';
    }
     
    }
    
    });
    
    }
    
    });
    
    });
   //canli saat hissesi
    function showTime(){
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59
    var session = "AM";
    
    if(h == 0){
        h = 24;
    }
    
    if(h > 23){
        h = h - 24;
        session = "PM";
    }
    
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    
    var time = h + ":" + m + ":" + s + " ";
    document.getElementById("MyClockDisplay").innerText = time;
    document.getElementById("MyClockDisplay").textContent = time;
    
    setTimeout(showTime, 1000);
}
showTime();
function time(){
    var d = new Date();
    var s = d.getSeconds();
    var m = d.getMinutes();
    var h = d.getHours();
    var time=h + ":" + m + ":" + s;
    document.getElementById("#MyClockDisplays").innerText = time;
    document.getElementById("#MyClockDisplays").textContent = time;
    
}

setInterval(time,1000);

// panel tenzimlemelerde adminleri silmek
$('.silmek').click(function(){
    var a=$(this).attr('id');
    
    $.ajax({
    type:'POST',
    url:'../funksiya.php',
    data:{admin_id:a},
    success:function(cavab){
    
    
      if(cavab=='1'){
      window.location.href="panel_tenzimlemeler.php"
    
        alert('id-si '+a+' olan user silinecek');
     
      }
    }
    
    });
    
    });

 // admin giris-2nin qeydiyyati
$('#giris2').click(function(){
    var mail=$('.mailvalue').val();
    var name=$('.namevalue').val();
    var password=$('.passwordvalue').val();
    if(mail.length==0 || name.length==0  || password.length==0 ){
    alert('xanalari doldurun');
    }else{
      $.ajax({
        type:'post',
        url:'../funksiya.php',
        data: $(".admin_giris2").serialize(),
        success:function(cavab){
          if(cavab=='alindi'){
      alert('meulamatlar ugurla qeyd edildi');
      window.location.href='panel.php';
$('.admin_giris2').trigger('reset');
          }
          else{
   alert('bu meumaldi admin artiq movcuddur');
$('.admin_giris2').trigger('reset');

          }
        }




      })
    }
    
    
    });
 // duzelis etmek panel_tenzimlemeler
  // melumatlari cagirmag
  $('.duzelis').click(function(){
    var a=$(this).attr('id');
    $('.modal-title').text('id-si :'+a+' olana  gore redakte et ');
    $('#edit_id_input').val(a);
 
 
 $.ajax({
     type:'POST',
     url:'../funksiya.php',
       data:{admin_id2:a},
       success:function(cavab){
 
         var gelen_melumatlar=JSON.parse(cavab);
 
 
 
         
         $('#name_edit').val(gelen_melumatlar.admin2name);
         $('#mail_edit').val(gelen_melumatlar.admin2mail);
         $('#password_edit').val(gelen_melumatlar.admin2password);
         $('#photo_edit').val(gelen_melumatlar.admin2photo);
 
       }
 
     });
     
     });
     //  panel_tenzimlemeler cagirilmiw melumatlari deyiwib yeniden yazdrimag
 
  //mesaj silme hissesi

$('.sil').click(function(){
    var silmek=$(this).attr('id');
   $.ajax({
     type:'POST',
     url:'../funksiya.php',
     data:{mesaj_silmek:silmek},
     success:function(cavab){
       if(cavab==1){
         alert(silmek+' gonderdiyi mesaj silinecek');
         window.location.href='message.php';
       }
     }
   });
  });
  //Mesaja cavab gondermek hissesi
  $('#gondermek').click(function(){
    var text=$('#formgedenmesaj').val();
      if(text.length==0){
        alert('cavab xanasini bos qoymag olmaz');
      }else{
        $.ajax({
          type:'POST',
          url:'../funksiya.php',
          data:$('#form_modal').serialize(),
          success:function(cavab){
            if(cavab==1){
              $('#exampleModal').modal('hide');
              window.location.href="message.php";
            }
          }
  
        });
      }
      });
       // mesajlari modala salmag
  $('.cavabla').click(function(){
    
    var a=$(this).attr('id');
   $('.modal-form').text(a+' -dan gelen');
   $('#edit_id_mesaj').val(a);
   $.ajax({
        type:'POST',
        url:'../funksiya.php',
        data:{mesajname:a},
        success:function(cavab){

var gelen_msg=JSON.parse(cavab);
$('#formgelenmesaj').val(gelen_msg.mesaj2name);


        }
    });
  });
  
  // potfolio modal melumat silme
  $('.navbarsilmek').click(function(){
    var w=$(this).attr('id');
   $.ajax({
     type:'post',
     url:'../funksiya.php',
     data:{navbarsilmek:w},
     success:function(cavab){
       if(cavab==1){
       alert(w+' slindi');
       }else{
             alert('alinmadi');
       }
     }
   });
  });
  //portfolio modal deyiwmek
  $('.deyiw').click(function(){
    var b=$(this).attr('id');
    $('.modal-title_nav').text('Navbar Yenilemek');
    $('#nav_id_input').val(b);

    $.ajax({
      type:'POST',
      url:'../funksiya.php',
      data:{nav_id:b},
      success:function(cavab){

        var gelen_melumatlar=JSON.parse(cavab);
        $('#id_text1').val(gelen_melumatlar.navmelumat1);
        $('#id_text2').val(gelen_melumatlar.navmelumat2);
        $('#id_text3').val(gelen_melumatlar.navmelumat3);
        $('#id_text4').val(gelen_melumatlar.navmelumat4);
        $('#id_text5').val(gelen_melumatlar.navmelumat5);
        $('#id_text6').val(gelen_melumatlar.navmelumat6);
        $('#id_text7').val(gelen_melumatlar.navmelumat7);
      }
    });
    
  });
  // portfolio navbar modalda yazilmiw melumattlari yeniden yazdrimag
  $('#navyenile').click(function(){
    $.ajax({
      type:'post',
      url:'../funksiya.php',
      data:$('#form_nav').serialize(),
      success:function(cavab){
        if(cavab==true){
          window.location.href='panel.php';
         
        }
      }
    });
  });
 