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
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">

  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="css/style.css?v=<?php echo rand(1,9999); ?>">
  <link rel="shortcut icon" href="../images/Logo/M logo (2).png" />
</head>
<body>
  <div class="container-scroller d-flex">
    
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
            <button class="btn bg-dark btn-sm menu-title">Goz at</button>
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
                <a class="dropdown-item preview-item bg-primary  " href='http://localhost/portfolio/template/images/adminsekil/WhatsApp%20Image%202022-04-15%20at%2002.55.00.jpeg'>
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

<!-- Modal -->


<div style='width:100%;height:140px;  box-shadow: 3px 3px 3px 1px lightblue; '>
     <div class="container-fluid" >
           <div class="row ">
               <center><img src="../images/Logo/M logo (2).png"  class='  m-auto'  width="170px"  height="140px" alt="logo"/><span style='margin-top:50px;text-align:center color:red' class=' text-dark h2 '>Portfolio:idarə paneli</span></center>
           </div>
    </div>  
 </div>

 <!-- container navbar-->
      <div class="container mt-5 m-auto">
  <div class="row m-auto">
    <div class="col-sm-2 text-primary h3 text_navbar dropdown" >
    <i class="mdi mdi-view-headline menu-icon"></i>
    Basic
    <div class="dropdown-content ">
           <a href="#" data-bs-toggle="modal"class='nav1' data-bs-target="#text_navbar">Navbar</a>
           <a href="slider_image.php"  class='nav1' >Slider image</a>
           <a href="#" class='nav1'>slider text</a>
      </div>
    </div>
          

    <div class="col-sm-2 text-primary h3" >
     Coming soon
    </div>
    <div class="col-sm-2 text-primary h3">
    Coming soon
    </div>
    <div class="col-sm-2 text-primary h3">
    Coming soon
    </div>
    <div class="col-sm-2 text-primary h3">
    Coming soon
    </div>
    <div class="col-sm-2 text-primary h3">
    Coming soon
    </div>
    
  </div>
</div>

<!-- modal navbar melumat deyiwmek-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <p class="modal-title_nav m-auto h3 text-success" id="staticBackdropLabel">Modal title</p>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="form_nav">
          <div class="mb-3">


          <input type="hidden" id="nav_id_input" name="nav_edit" >
            <label for="recipient-name" class="col-form-label">text1</label><br>
            <input type="text" name="name_text1"  id="id_text1" class="form-control" id="recipient-name"><br>
            <label for="recipient-name" class="col-form-label">tex2</label><br>
            <input type="text" name="name_text2"  id="id_text2" class="form-control" id="recipient-name"><br>
            <label for="recipient-name" class="col-form-label">text3</label><br>
            <input type="text" name="name_text3"  id="id_text3" class="form-control" id="recipient-name"><br>
            <label for="recipient-name" class="col-form-label">text4</label><br>
            <input type="text" name="name_text4"  id="id_text4" class="form-control" id="recipient-name"><br>
            <label for="recipient-name" class="col-form-label">text5</label><br>
            <input type="text" name="name_text5"  id="id_text5" class="form-control" id="recipient-name"><br>
            <label for="recipient-name" class="col-form-label">text6</label><br>
            <input type="text" name="name_text6"  id="id_text6" class="form-control" id="recipient-name"><br>
            <label for="recipient-name" class="col-form-label">text7</label><br>
            <input type="text" name="name_text7"  id="id_text7" class="form-control" id="recipient-name"><br>
            
          </div>
          
         
          <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">bagla</button>
        <button type="button" class="btn btn-success" id='navyenile'>Yenile</button>
      </div>
        
      </div>
     
      </form>
      
      </div>
     
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


<!-- Modal  navbar-->
<div class="modal fade " id="text_navbar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl ">
    <div class="modal-content " style='background-color:AliceBlue'>
      <div class="modal-header">
        <h2 class="modal-title m-auto text-info " id="exampleModalLabel">Navbar yenile</h2>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body m-auto ">
      
<table class="table align-middle mb-0 bg-white shadow-lg">
  <thead class="bg-light">
    <tr>
      <th >NO_</th>
      <th>TEXT1</th>
      <th>TEXT2</th>
      <th>TEXT3</th>
      <th>TEXT4</th>
      <th>TEXT5</th>
      <th>TEXT6</th>
      <th>TEXT7</th>
      <th>Son Dəyişiklik</th>
      <th>Redakte</th>
    </tr>
  </thead>

  <?php

$say=0;
$a=$data_base->prepare('SELECT * from add_navbar');
$a->execute();
while($b=$a->Fetch(PDO::FETCH_ASSOC)){
    $say++;
    
    
    ?>
  <tbody>
    
   
    <tr>
      <td><?php echo $say;?></td>
      <td><?php echo $b['text1'];?></td>
      <td><?php echo $b['text2'];?></td>
      <td><?php echo $b['text3'];?></td>
      <td><?php echo $b['text4'];?></td>
      <td><?php echo $b['text5'];?></td>
      <td><?php echo $b['text6'];?></td>
      <td><?php echo $b['text7'];?></td>
      <td><?php echo $b['date'];?></td>
      <td>

        <button id='<?php echo $b['text'];?>'  data-bs-toggle="modal" data-bs-target="#staticBackdrop"
                class="btn btn-success btn-rounded btn-sm fw-bold deyiw "
                data-mdb-ripple-color="dark"
                >
          Dəyiş
        </button>


        <button id='<?php echo $b['text'];?>'
               type='button' 
                class="btn btn-danger btn-rounded btn-sm fw-bold  navbarsilmek"
                data-mdb-ripple-color="dark"
                >
         Sil
        </button>
      </td>
    </tr>
  </tbody>
  <?php }
?>

</table>

      <div class="modal-footer">
        <button type="button" class="btn btn-dark text-info" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
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