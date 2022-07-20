<?php
include '../pdo.php';
  if(!isset($_COOKIE['giris'])){
 header('location:../login.php');
}



$a=$data_base->prepare('SELECT * FROM add_slider where addsliderid=:a');
  $a->execute(array(
    'a'=>1
  ));
  $b=$a->FETCH(PDO::FETCH_ASSOC);
  
  ?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin panel</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/style.css?v=<?php echo rand(1,9999); ?>">
  <link rel="shortcut icon" href="../images/Logo/M logo (2).png" />
</head>
<body class='p-5' style=' background-image: url("images/other/navbar-cover.jpg");background-repeat: no-repeat;background-size: cover;'>

<div class='container'>
    <div class='row'>
        
    <div class='col-xl-3 col-md-6 pb-5 '>
              <div  class='imagediv'>
                     <h1  class='maa'> slider 1</h1>
                      <form id='slider1'  action='../funksiya.php'method='post' enctype="multipart/form-data">
                      <input type="hidden" class='form-control form-controls' name='slider1_hidden'>
                      <input type="file" class='form-control form-controls' name='slider1'>
                      <button type="submit" class='btn btn-success ddd'>Yukle</button>
                      <a  class='sekillink' href='/portfolio/<?php echo $b['addslider1'];?>'>sekle bax</a>
                      <img src="../<?php echo $b['addslider1'];?>" width='100px' height='112px' class='q'>
                      </form>
               </div>
        </div>

        <div class='col-xl-3 col-md-6 pb-5 '>
              <div  class='imagediv'>
                     <h1  class='maa'> slider 2</h1>
                      <form  id='slider2'  method='post' enctype="multipart/form-data">
                      <input type="hidden" class='form-control form-controls' name='slider2_hidden'>
                      <input type="file" class='form-control form-controls' name='slider2'>
                      <button class='btn btn-success ddd'>Yukle</button><a href='portfolio/<?php echo $b['addslider2'];?>'>sekle bax</a>
                      <img src="../<?php echo $b['addslider2'];?>" width='100px' height='112px' class='q'>
                      </form>
               </div>
        </div>

        <div class='col-xl-3 col-md-6 pb-5 '>
              <div  class='imagediv'>
                     <h1  class='maa'> slider3</h1>
                      <form id='slider3'  method='post' enctype="multipart/form-data">
                      <input type="hidden" class='form-control form-controls' name='slider3_hidden'>
                      <input type="file" class='form-control form-controls' name='slider3'>
                      <button class='btn btn-success ddd'>Yukle</button><a href='portfolio/<?php echo $b['addslider3'];?>'>sekle bax</a>
                      <img src="../<?php echo $b['addslider3'];?>" width='100px' height='112px' class='q'>
                      </form>
               </div>
        </div>

        <div class='col-xl-3 col-md-6  '>
              <div  class='imagediv'>
                     <h1  class='maa'>Logo</h1>
                      <form>
                      <input type="file" class='form-control form-controls' name='slider1'>
                      <button class='btn btn-success ddd'>Yukle</button><a href='portfolio/<?php echo $b['addlogo'];?>'>sekle bax</a>
                      <img src="../<?php echo $b['addslogo'];?>" width='100px' height='112px' class='q'>
                      </form>
               </div>
        </div>

    </div>

</div>
<hr class='text-white hr'>

<!-- Modal slider_image 
<div >
  <div class=>
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title <a href='../index.php'>nezer yetir</a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          upload form ajax ile
      <form  class="form_slider"  method='post' enctype="multipart/form-data" >
  <input type="hidden" id="slider1-id" name='slider-hidden' class="form-control form-control-lg namevalue" />

<div class="form-outline mb-4">
  <label class="form-label text-info" for="form2Example28">Slider 1</label>
  <input type="file" id="slider1-id" name='slider1-name' class="form-control form-control-lg namevalue" />
</div>
<div class="form-outline mb-4">
<label class="form-label text-info" for="form2Example18">Slider 2</label>
  <input type="file" id="slider2-id" name='slider2-name' class="form-control form-control-lg mailvalue" />
</div>

<div class="form-outline mb-4">
<label class="form-label text-info" for="form2Example28">Slider 3</label>
  <input type="file" id="slider3-id" name='slider3-name' class="form-control form-control-lg passwordvalue" />
</div>

<div class="form-outline mb-4">
<label class="form-label text-info" for="form2Example28">Logo</label>
  <input type="file" id="logo-id" name='logo-name' class="form-control form-control-lg passwordvalue" />
</div>



      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Bagla</button>
        <button class="btn btn-info btn-xl btn-block " id='slider_imageid' type="submit">Yukle</button>
      </div>
      </form>
    </div>
   
  </div>
</div>
-->
<script>
/*
$('#slider1').on('submit',function(e){
e.preventDefault();
$.ajax({
    type:'post',
    url:'../funksiya.php',
    data:new FormData(this),
    success:function(cavab){
        if(cavab==1){
            alert('alindi');
        }else{
            alert('alinmadi');
        }
    }
});
});*/
  </script>
<script src="vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page-->
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page-->
  <!-- inject:js -->
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
  <!-- endinject -->
  <!-- plugin js for this page -->
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <!-- End plugin js for this page -->
  <!-- Custom js for this page-->
  <script src="js/dashboard.js"></script>
  <!-- End custom js for this page-->
<script src="../js/main.js?v=<?php echo rand(1,9999); ?>"></script>
</body>
</html>