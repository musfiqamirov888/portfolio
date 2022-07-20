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
  <link rel="stylesheet" href="vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
    <nav class="sidebar sidebar-offcanvas bg-success" id="sidebar">
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
          <a class="nav-link" href="pages/forms/basic_elements.html">
            <i class="mdi mdi-view-headline menu-icon"></i>
            <span class="menu-title">Form elements</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="message.php">
            <i class="mdi mdi-email-open menu-icon"></i>
            <span class="menu-title">Mesajlarim <button type="button" class="btn">
            <span class="badge rounded-pill bg-danger"> <?php $mesaj_yoxla=$data_base->prepare('SELECT * FROM usermessage ');
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
          <a class="nav-link" href="https://www.bootstrapdash.com/product/spica-admin/">
            <button class="btn bg-danger btn-sm menu-title">Upgrade to pro</button>
          </a>
        </li>
      </ul>
    </nav>
    <!-- partial -->
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
                <a class="dropdown-item preview-item bg-success  " href='http://localhost/portfolio/template/images/adminsekil/WhatsApp%20Image%202022-04-15%20at%2002.55.00.jpeg'>
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
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="message.php" >
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
      
       <!-- mesajlar olan table-->
       <h1 style='text-align:center;color:red'>Mesajlarim</h1>
  
  <div  class="table-responsive" >
  <table class="table align-middle mb-0 bg-white"  >
  <thead class="bg-light table-dark">
    <tr>
      <th>NO_</th>
      <th>ad ve soyad</th>
      <th>ip</th>
      <th>mail</th>
      <th>telefon</th>
      <th>mesaj tarixi</th>
      <th>redakte</th>

    </tr>
  </thead>

  <?php

$say=0;
$a=$data_base->prepare('SELECT * from usermessage');
$a->execute();
while($b=$a->Fetch(PDO::FETCH_ASSOC)){
    $say++;
    
    
    ?>
  <tbody>
    
   
    <tr>
      <td><?php echo $say;?></td>
      <td><?php echo $b['messagename'];?></td>
      <td><?php echo $b['messageip'];?></td>
      <td><?php echo $b['messagemail'];?></td>
      <td><?php echo $b['messagephone'];?></td>
      <td><?php echo $b['messagedate'];?></td>
      
      
     
      <td>
<?php

if($b['messagestatus']==1){?>
 <button 
                class="btn btn-danger btn-rounded btn-sm fw-bold  "
                data-mdb-ripple-color="dark"
                >
         artiq cavablandiridli
        </button>
<?php header('location:message.php');} else{ ?>

  <button id='<?php echo $b['messagename']; ?>'  data-bs-toggle="modal" data-bs-target="#messagemodal"  
                class="btn btn-info btn-rounded btn-sm fw-bold  cavabla"
                data-mdb-ripple-color="dark"
                >
         cavabla
        </button>

<?php }
?>




        
     

        <button id='<?php echo $b['messagename'] ?>'
               type='button' 
                class="btn btn-success btn-rounded btn-sm fw-bold sil"
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
  </div>


<!-- modal-->
          <?php
$a=$data_base->prepare('SELECT * FROM usermessage');
$a->execute();
$b=$a->Fetch(PDO::FETCH_ASSOC);
  


{
  ?>
<div class="modal fade"  id='messagemodal' tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">

  <div class="modal-dialog">

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-form" id="exampleModalLabel">mesajlar</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form id="form_modal">
          <div class="mb-3">

          <input type="hidden" id="edit_id_mesaj" name="edit_id_mesaj" >

            <label for="recipient-name" class="col-form-label">gonderen wexs</label>
            <textarea name="formgelenmesaj" id="formgelenmesaj" class="form-control" rows="4" placeholder="Mesajınızı daxil edin" required="required"></textarea>

          </div>
          
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">cavablayan wexs</label>
            <textarea name="formgedenmesaj" id="formgedenmesaj" class="form-control" rows="4" placeholder="Mesajınızı daxil edin" required="required"></textarea>

          </div>

          <div class="modal-footer">

        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  id='gondermek'  type="button" class="btn btn-primary sss"  >gonder</button>
      </div>
        
      </div>
     
      </form>
      
    </div>
  </div>
</div>
<?php }
?>
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
  <script src="vendors/chart.js/Chart.min.js"></script>
  <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/off-canvas.js"></script>
  <script src="js/hoverable-collapse.js"></script>
  <script src="js/template.js"></script>
    <script src="js/jquery.cookie.js" type="text/javascript"></script>
  <script src="js/dashboard.js"></script>
<script src="../js/main.js?v=<?php echo rand(1,9999); ?>"></script>

</body>

</html>