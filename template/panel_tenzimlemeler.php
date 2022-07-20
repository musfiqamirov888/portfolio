<?php
include '../pdo.php';
  if(!isset($_COOKIE['giris'])){
 header('location:../login.php');
}
 date_default_timezone_set('Asia/baku');
  $date=date('d-m-Y');

    $a=$data_base->prepare('SELECT * FROM adminesas where adminmail=:a');
    $a->execute(array(
      'a'=>$_COOKIE['giris']
    ));
    $b=$a->FETCH(PDO::FETCH_ASSOC);
  
  ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin panel</title>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="shortcut icon" href="../images/Logo/M logo (2).png" />
</head>
<body>

  
  <div class="container-scroller d-flex">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
        
      </div>
    </div>
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas bg-dark" id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="panel.php">
            <i class="mdi mdi-view-quilt menu-icon"></i>
            <span class="menu-title">Ana sehife</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Components</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="mdi mdi-palette menu-icon"></i>
            <span class="menu-title">UI Elements</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/buttons.html">Buttons</a></li>
              <li class="nav-item"> <a class="nav-link" href="pages/ui-features/typography.html">Typography</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="message.php">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">Form elements</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="message.php">
          <i class="mdi mdi-email-open menu-icon"></i>
            <span class="menu-title">Mesajlarim <button type="button" class="btn">
            <span class="badge rounded-pill bg-danger"><?php $mesaj_yoxla=$data_base->prepare('SELECT * FROM usermessage ');
$mesaj_yoxla->execute(array());
$mesaj_say=$mesaj_yoxla->rowCount();

echo $mesaj_say;?></span>
                                                </button>
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/tables/basic-table.html">
            <i class="mdi mdi-grid-large menu-icon"></i>
            <span class="menu-title">Tables</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="pages/icons/mdi.html">
            <i class="mdi mdi-emoticon menu-icon"></i>
            <span class="menu-title">Icons</span>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Pages</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <i class="mdi mdi-account menu-icon"></i>
            <span class="menu-title">Admin profil</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse  bg-white" id="auth">
            <ul class="nav flex-column sub-menu">
                
              <li> <a class="nav-link text-dark h5 me-5" data-bs-toggle="modal" data-bs-target="#exampleModalqeydiyyat"> <i class=" mdi mdi-account-multiple text-danger  display-4"></i> Hesab elave et </a></li>
              <li> <a class="nav-link h5 text-dark me-5 " href="panel_tenzimlemeler.php">  <i class="mdi mdi-settings text-primary display-4"></i> Tenzimlemeler</a></li>
              <li> <a class="nav-link h5 text-dark me-5" href="../cixis.php"> <i class="mdi mdi-logout text-warning  display-4"></i> Çixiş </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item sidebar-category">
          <p>Apps</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="docs/documentation.html">
            <i class="mdi mdi-file-document-box-outline menu-icon"></i>
            <span class="menu-title">Documentation</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../index.php">
            <button class="btn bg-dark btn-sm menu-title">Upgrade to pro</button>
          </a>
        </li>
      </ul>
    </nav>
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12  d-flex flex-row">

        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
      <img src="../images/Logo/M logo (2).png"  width="150px"  height="100px" alt="logo"/>
         
          </button>
          <div class="navbar-brand-wrapper">
          </div>
          
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block"> <div id="MyClockDisplay" class="clock" onload="showTime()"></div><br><?php echo $date ?>
</h4>
            </li>
            <li class="nav-item dropdown me-1">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
              <i class="mdi mdi-account-multiple "></i>
                <span class="count bg-success"><?php $adminsay_yoxla=$data_base->prepare('SELECT * FROM adminesas');
        $adminsay_yoxla->execute(array()); 
        $admin_say=$adminsay_yoxla->rowCount();
        echo  $admin_say;?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Messages</p>
                <a class="dropdown-item preview-item bg-dark  " href='http://localhost/portfolio/template/images/adminsekil/WhatsApp%20Image%202022-04-15%20at%2002.55.00.jpeg'>
                  <div class="preview-thumbnail " style='width:50px;height:50px'>
             <img src="../<?php echo $b['adminphoto'];?>" height='70px'  width='100px' alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal text-white">Ad--<?php echo $b['adminname'];?>
                    </h6>
                    <p class="font-weight-light text-white  mb-0 text-dark">
                    Sifhre--<?php echo $b['adminpassword'];?>
                    </p>
                  </div>
                </a>
              </div>
            </li>
            <li class="nav-item dropdown me-2">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown"  href="message.php">
                <i class="mdi mdi-email-open mx-0"></i>
                <span class="count bg-danger"><?php $mesaj_yoxla=$data_base->prepare('SELECT * FROM usermessage ');
$mesaj_yoxla->execute(array());
$mesaj_say=$mesaj_yoxla->rowCount();

echo $mesaj_say;?></span>
              </a>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex" style='width:230px;margin-left:1040px'>
          <ul class="navbar-nav navbar-nav-right" style='width:250px'>
            <li class="nav-item nav-profile dropdown m-auto">
            <img class='rounded-pill'  src="../<?php echo $b['adminphoto'];?>" width='60px' height='65px'/>

              <a class="nav-link dropdown-toggle " href="#" data-bs-toggle="dropdown" id="profileDropdown">
                <span class="nav-profile-name fw-bold "><?php echo $b['adminname']?>  ID==:<?php echo $b['adminid']; ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModalqeydiyyat">
                  <i class="mdi mdi-account text-danger"></i>
                  hesab elave et
                </a>
                <a class="dropdown-item" href='panel_tenzimlemeler.php'>
                  <i class="mdi mdi-settings text-primary"></i>
                 tenzimlemeler
                </a>
                <a class="dropdown-item" href='../cixis.php'>
                  <i class="mdi mdi-logout text-warning"></i>
                 cixis
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link icon-link">
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <h1 style='text-align:center;color:black'>Tenzimlemeler</h1>

       <!-- panel tenzimlemeler-->
      <?php
  if(isset($_COOKIE['giris'])){
    $a=$data_base->prepare('SELECT * FROM adminesas where adminmail=:a');
    $a->execute(array(
      'a'=>$_COOKIE['giris']
    ));
    $b=$a->FETCH(PDO::FETCH_ASSOC);
  }
 
  ?>
  
<table class="table align-middle mb-0 bg-white ">
  <thead class="bg-light">
    <tr>
      <th>NO_</th>
      <th>ad ve soyad</th>
      <th>id</th>
      <th>mail</th>
      <th>password</th>
      <th>photo</th>
      <th>qeydiyyat tarixi</th>
      <th>redakte</th>
    </tr>
  </thead>

  <?php

$say=0;
$a=$data_base->prepare('SELECT * from adminesas');
$a->execute();
while($b=$a->Fetch(PDO::FETCH_ASSOC)){
    $say++;
    
    
    ?>
  <tbody>
    
   
    <tr>
      <td><?php echo $say;?></td>
      <td><?php echo $b['adminname'];?></td>
      <td><?php echo $b['adminid'];?></td>
      <td><?php echo $b['adminmail'];?></td>
      <td><?php echo $b['adminpassword'];?></td>
      <td><img  src="../<?php echo $b['adminphoto'];?>" width='50px' height='50px'></td>
      <td><?php echo $b['admindate'];?></td>
      
      
     
      <td>

        <button id='<?php echo $b['adminid'] ?>'  data-bs-toggle="modal" data-bs-target="#exampleModal"  
                class="btn btn-info btn-rounded btn-sm fw-bold  duzelis"
                data-mdb-ripple-color="dark"
                >
          duzelis
        </button>


        <button id='<?php echo $b['adminid'] ?>'
               type='button' 
                class="btn btn-danger btn-rounded btn-sm fw-bold silmek"
                data-mdb-ripple-color="dark"
                >
          sil
        </button>
      </td>
    </tr>
  </tbody>
  <?php }
?>

</table>


<!-- Modal  adminleri tenzimlemek-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Redakte et</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      
      <form id="form_order" method='post' action='../funksiya.php' enctype="multipart/form-data">
          <div class="mb-3">


          <input type="hidden" id="edit_id_input" name="edit_id_input" >
            <label for="recipient-name" class="col-form-label">ad ve soyaad</label>
            <input type="text" name="name_edit"  id="name_edit" class="form-control" id="recipient-name">
          </div>
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">email</label>
            <input type="email"  name="mail_edit"  id="mail_edit"  class="form-control" id="recipient-name">
          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">sifre</label>
            <input type="password"  name="password_edit"  id="password_edit"  class="form-control" id="recipient-name">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Sekil yukle</label>
            <input type="file"  name="photo_edit"  id="photo_edit"  class="form-control" id="recipient-name">
          </div>
          
          
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" id='redakte'>redakte et</button>
      </div>
        
      </div>
     
      </form>
      
    </div>
  </div>
</div>
<!-- Modal qeydiyyat -->
<div class="modal fade" id="exampleModalqeydiyyat" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title <a href='../login.php'>login</a></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form  class="admin_giris2" >
<div class="form-outline mb-4">
  <label class="form-label" for="form2Example28">First and last name</label>
  <input type="text" id="name2" name='admin2-name' class="form-control form-control-lg namevalue" />

</div>
<div class="form-outline mb-4">
<label class="form-label" for="form2Example18">Email address</label>
  <input type="email" id="mail2" name='admin2-mail' class="form-control form-control-lg mailvalue" />
</div>

<div class="form-outline mb-4">
<label class="form-label" for="form2Example28">Password</label>
  <input type="password" id="password2" name='admin2-password' class="form-control form-control-lg passwordvalue" />
</div>

<p class="small mb-5 pb-lg-2"><a class="text-muted" href="#!">sifremi unutdum</a></p><br>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button class="btn btn-info btn-xl btn-block" id='giris2' type="button">qeyde al</button>
      </div>
      </form>
    </div>
   
  </div>
</div>


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