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
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title> Admin panel</title>
  <!-- base:css -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="../images/Logo/M logo (2).png" />
</head>
<body>
  <div class="container-scroller d-flex">
    <div class="row p-0 m-0 proBanner" id="proBanner">
      <div class="col-md-12 p-0 m-0">
      </div>
    </div>
    <!-- partial:./partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas " id="sidebar">
      <ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item tikla">
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
                
              <li> <a class="nav-link text-dark h5 me-5" href="" data-bs-toggle="modal" data-bs-target="#exampleModalqeydiyyat"> <i class=" mdi mdi-account-multiple text-danger  display-4"></i> Hesab elave et </a></li>
              <li> <a class="nav-link h5 text-dark me-5 " href="panel_tenzimlemeler.php">  <i class="mdi mdi-settings text-primary display-4"></i> Tenzimlemeler</a></li>
              <li> <a class="nav-link h5 text-dark me-5" href="cixis.php"> <i class="mdi mdi-logout text-warning  display-4"></i> Çixiş </a></li>
            
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
    <!-- partial -->
    <div class="container-fluid page-body-wrapper ">
      
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
       <h2 class='text-white m-auto'>Admin panele xos geldiniz</h2>
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end ">
         
          </button>
         
         
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
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face4.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">David Grey
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      The meeting is cancelled
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face2.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal">Tim Cook
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      New product launch
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                      <img src="images/faces/face3.jpg" alt="image" class="profile-pic">
                  </div>
                  <div class="preview-item-content flex-grow">
                    <h6 class="preview-subject ellipsis font-weight-normal"> Johnson
                    </h6>
                    <p class="font-weight-light small-text text-muted mb-0">
                      Upcoming board meeting
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
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header">Notifications</p>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-success">
                      <i class="mdi mdi-information mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Application Error</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Just now
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-warning">
                      <i class="mdi mdi-settings mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">Settings</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      Private message
                    </p>
                  </div>
                </a>
                <a class="dropdown-item preview-item">
                  <div class="preview-thumbnail">
                    <div class="preview-icon bg-info">
                      <i class="mdi mdi-account-box mx-0"></i>
                    </div>
                  </div>
                  <div class="preview-item-content">
                    <h6 class="preview-subject font-weight-normal">New user registration</h6>
                    <p class="font-weight-light small-text mb-0 text-muted">
                      2 days ago
                    </p>
                  </div>
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>

        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex" style='width:230px;margin-left:1040px'>
          <ul class="navbar-nav navbar-nav-right" style='width:250px'>
          
            <li class="nav-item nav-profile dropdown m-auto">
              
              <a class="nav-link dropdown-toggle " href="#" data-bs-toggle="dropdown" id="profileDropdown">
                <img src="images/faces/face5.jpg" />
                <span class="nav-profile-name fw-bold "><?php echo $b['adminname']?>  ID==:<?php echo $b['adminid']; ?></span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item" href='' data-bs-toggle="modal" data-bs-target="#exampleModalqeydiyyat">
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


<div style='width:100%;height:140px;  box-shadow: 3px 3px 3px 1px lightblue; '>
     <div class="container-fluid" >
           <div class="row ">
               <center><img src="../images/Logo/M logo (2).png"  class='  m-auto'  width="170px"  height="140px" alt="logo"/><span style='margin-top:50px;text-align:center color:red' class=' text-dark h1 '>Portfolio:idarə paneli</span></center>
           </div>
    </div>  
 </div>

 <!-- container navbar-->
      <div class="container mt-5 ms-4">
  <div class="row">
    <div class="col-sm-2 text-primary h3 text_navbar dropdown" >
    <i class="mdi mdi-view-headline menu-icon"></i>
    Basic
    <div class="dropdown-content ">
           <a href="#" data-bs-toggle="modal"class='nav1'data-bs-target="#text_navbar">Navbar</a>
           <a href="#" class='nav1'>Slider image</a>
           <a href="#" class='nav1'>slider text</a>
      </div>
    </div>
          

    <div class="col-sm-2 text-primary h3">
     xxxx
    </div>
    <div class="col-sm-2 text-primary h3">
     xxxx
    </div>
    <div class="col-sm-2 text-primary h3">
     xxxx
    </div>
    <div class="col-sm-2 text-primary h3">
     xxxx
    </div>
    <div class="col-sm-2 text-primary h3">
     xxxx
    </div>
    
  </div>
</div>

<!-- Modal  navbar-->
<div class="modal fade" id="text_navbar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title m-auto text-dark " id="exampleModalLabel">Navbar yenile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="form_navbar">

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label text-success">text1</label>
            <input type="text" name="name_text1"  id="name_text1" class="form-control" id="recipient-name">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label text-success">text1</label>
            <input type="text" name="name_text2"  id="name_text2" class="form-control" id="recipient-name">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label text-success">text1</label>
            <input type="text" name="name_text3"  id="name_text3" class="form-control" id="recipient-name">
          </div>
        
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label text-success">text1</label>
            <input type="text" name="name_text4"  id="name_text4" class="form-control" id="recipient-name">
          </div>
         
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label text-success">text1</label>
            <input type="text" name="name_text5"  id="name_text5" class="form-control" id="recipient-name">
          </div>

          <div class="mb-3">
            <label for="recipient-name" class="col-form-label text-success">text1</label>
            <input type="text" name="name_text6"  id="name_text6" class="form-control" id="recipient-name">
          </div>
        
        
        
          <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary yenile_nav" id='redakte'>Yenile</button>
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
        <h5 class="modal-title" id="exampleModalLabel">Modal title <a href='login.php'>login</a></h5>
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