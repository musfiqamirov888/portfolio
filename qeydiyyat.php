<!-- bu sehife muveqqeti iwlemir beke hec iwlemedi
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="stylesheet" href="stylelogin.css" type="">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 CSS only 
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>

    



<section class="vh-100 mt-5">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-4 text-black">

        <div class="px-5 ms-xl-4">
          <i class="fas fa-crow fa-2x me-3 pt-5 mt-xl-4" style="color: #709085;"></i>
          <span class="h1 fw-bold mb-0 text-info">QEYDIYYAT</span>
        </div>

        <div class="d-flex align-items-center h-custom-2 ms-xl-4 mt-2 pt-5 pt-xl-0 mt-xl-n5">

          <form style="width: 23rem;" class="admin_giris2" >

            <h3 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;"><img src="images/Logo/M logo (2).png" width="250px"  height="200px" alt=""></h3>
 
            <div class="form-outline mb-4">
              <input type="text" id="name2" name='admin2-name' class="form-control form-control-lg namevalue" />
              <label class="form-label" for="form2Example28">First and last name</label>
            </div>
            <div class="form-outline mb-4">
              <input type="email" id="mail2" name='admin2-mail' class="form-control form-control-lg mailvalue" />
              <label class="form-label" for="form2Example18">Email address</label>
            </div>

            <div class="form-outline mb-4">
              <input type="password" id="password2" name='admin2-password' class="form-control form-control-lg passwordvalue" />
              <label class="form-label" for="form2Example28">Password</label>
            </div>
            
            


            <div class="pt-1 mb-4">
              <button class="btn btn-info btn-xl btn-block" id='giris2' type="button">giris</button>
            </div>
            <a href='login.php'>login</a>

            <p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">sifremi unutdum</a></p><br>
            <p id="alert"></p>
          </form>
          <p id="alert"></p>
        </div>

      </div>
      <div class=' col-sm-8 bg- musfiq' style='width:1000px;height:500px, '></div>
      
    </div>
  </div>
</section>




<script>
// admin giris-2nin qeydiyyati
$('#giris2').click(function(){
    var mail=$('.mailvalue').val();
    var name=$('.namevalue').val();
    var password=$('.passwordvalue').val();
    if(mail.length==0 || name.length==0  || password.length==0 ){
      $('#alert').html('<div class="alert alert-danger">xanalari doldurun!!! !</div>');
    }else{
      $.ajax({
        type:'post',
        url:'funksiya.php',
        data: $(".admin_giris2").serialize(),
        success:function(cavab){
          if(cavab=='alindi'){
            Swal.fire(
       'UGURLU',
       'EMELLIYAT',
       'success'
)
  
$('.admin_giris2').trigger('reset');
          }
          else{
            Swal.fire({
  icon: 'error',
  title: 'bu email artiq qeyde alinib',
  text: 'basqa email unvani ile yeniden yoxlayin!'
});
$('.admin_giris2').trigger('reset');

          }
        }




      })
    }
    
    
    });



</script>






-->


<!--<script src="js/main.js"></script>-->

<!-- JavaScript Bundle with Popper 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

























</html>-->