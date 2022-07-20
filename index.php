<?php
include 'pdo.php'; 
$s=$data_base->prepare('SELECT * FROM add_navbar where text=:a');
$s->execute(array(
  'a'=>1
));
$z=$s->FETCH(PDO::FETCH_ASSOC);


$a=$data_base->prepare('SELECT * FROM add_slider where addsliderid=:a');
  $a->execute(array(
    'a'=>1
  ));
  $b=$a->FETCH(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">
<link rel="icon" href="images/Logo/M logo (2).png" type="image/x-icon">
<title>Müşfiq Əmirov.net</title>
<!--Bootstrap-->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<!--Stylesheets-->
<link rel="stylesheet" type="text/css" href="css/style.css?v=<?php echo rand(1,9999); ?>">
<!--Responsive-->
<link rel="stylesheet" type="text/css" href="css/responsive.css">
<!--Animation-->
<link rel="stylesheet" type="text/css" href="css/animate.css">
<!--Prettyphoto-->
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<!--Font-Awesome-->
<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
<!--Owl-Slider-->
<link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="css/owl.theme.css">
<link rel="stylesheet" type="text/css" href="css/owl.transitions.css">
<!--jquery-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<!--sweet alert-->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<style>

</style>
</head>
<body data-spy="scroll" data-target=".navbar-default" data-offset="100"  >

<!--Navigation-->
<header id="menu">
  <div class="navbar navbar-default navbar-fixed-top bg-danger"  style='height:120px; padding-top:10px' >
    <div class="container" >
      <div class="container" >
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
          <a class="navbar-brand" href="#menu" style='margin-top:-20px; ' ><img src="images/Logo/M logo (2).png" width="170px"  height="120px" alt=""></a> </div>
        <div class="collapse navbar-collapse " id="bs-example-navbar-collapse-1" style='margin-left:150px;margin-top:-50px'>
          <ul class="nav navbar-nav" style='margin-left:100px'>
            <li class="active "><a class='aaa' href="login.php"><?php echo $z['text1'];?></a></li>
            <li><a class="scroll aaa" href="#haqqimizda"><?php echo $z['text2'];?></a></li>
            <li><a class="scroll aaa" href="#service"><?php echo $z['text3'];?></a></li>
            <li><a class="scroll aaa" href="#features"><?php echo $z['text4'];?></a></li>
            <li><a class="scroll aaa" href="#portfolio"><?php echo $z['text5'];?></a></li>
            <!--<li><a class="scroll" href="#pricing">QiymƏt paketlƏri</a></li>-->
            <li><a class="scroll aaa" href="#team"><?php echo $z['text6'];?></a></li>
            <!-- ehtiyyatda olan indexin bloku
            <li><a class="scroll" href="#blog">Blog</a></li>
          -->
            <li><a class="scroll aaa" href="#contact"><?php echo $z['text7'];?></a></li>
          </ul>
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </div>
  </div>
</header>
<!--Slider-Start-->
<section id="slider">
  <div id="home-carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="item active" style="background-image:url(<?php  echo $b['addslider1'];?>)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1>Müşfiq Əmirov</h1>
              <h2>Full-stack developer</h2>
              <p>İstƏnilƏn yaradıcı biznes agentliyi üçün uyğun olan Bir SƏhifƏnin yaradilmasi, HTML5 vƏ Responsive Şablon. Çoxlu sayda CSS vƏ JQuery animasiyaları ilƏ bu mövzuya çoxlu sƏhifƏlƏr dƏ daxildir</p>
            </div>
          </div>
        </div>
      </div>
      <div class="item" style="background-image:url(images/Slider/slider2.jpg)">
        <div class="carousel-caption container">
          <div class="row">
            <div class="col-md-7 col-sm-12 col-xs-12">
              <h1>Admin panel</h1>
              <h2>HƏr növ funksiyalarla</h2>
              <p>İstƏnilƏn sahe ucun yaradilmasi ve quraşdirilmasi</p>
            </div>
          </div>
        </div>
      </div>
      <div class="item" style="background-image:url(images/Aboutus/01.jpg)">
        <div class="carousel-caption container">
          <div class="row">
             <div class="col-md-7 col-sm-12 col-xs-12">
              <h1>Tam responsive</h1>
              <h2>istenilen ekranlar ucun</h2>
              <p>Tam tehlukesiz ve etibarli</p>
            </div>
          </div>
        </div>
      </div>
      <a class="home-carousel-left" href="#home-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a> <a class="home-carousel-right" href="#home-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a> </div>
  </div>
  <!--/#home-carousel-->
</section>
<!--haqqimizda-Section-Start-->
<section id="haqqimizda">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2>HAQQİMİZDA</h2>
        <div class="line"></div>
        <p><strong>Sumqayit DovlƏt universiteti,komputer muhƏndisliyi fakültƏsi.</strong> </p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12 ab-sec">
        <div class="col-md-6">
          <h3 class="wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms"><span>B</span>iz mƏqsƏdli vƏ Əzmkariq</h3>
          <p><span><strong>2021</strong></span>-ci ildƏn bu sahƏdƏ yer aldim vƏ tam bir mƏqsƏdlƏ hƏdƏflƏrimƏ dogru addimlamağa başladim. </p>
        </div>
        <div class="col-md-6 ab-sec-img wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms"><img src="images/Slider/slider3.jfif"  width='500px' height='400px' alt=""> </div>
      </div>
    </div>
  </div>
</section>
<!--About-Sec-2-Start-->
<div class="bg-sec">
  <div class="container">
    <div class="col-md-10 col-sm-10 col-xs-8">
      <h3>ŞƏxsi mƏlumatlar üçün keçidƏ daxil olub mƏlumatlana bilƏrsiniz </h3>
    </div>
    <div class="col-md-2 col-sm-2 col-xs-4"> <a class="btn-down" href="wexsi.php">MƏlumatlarim</a> </div>
  </div>
</div>
<!--Service-Section-Start-->
<section id="service">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2> <span>Bizim  </span>bilikler</h2>
        <div class="line"></div>
        <p><span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
          et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>
    </div>
    <div class="row">
      <div class="features-sec">
        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
          <div class="media service-box">
            <div class="pull-left"> <i class="fa fa-line-chart"></i> </div>
            <div class="media-body">
              <h5 class="media-heading">UX Design</h5>
              <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
            </div>
          </div>
        </div>
        <!--/.col-md-4-->
        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
          <div class="media service-box">
            <div class="pull-left"> <i class="fa fa-cubes"></i> </div>
            <div class="media-body">
              <h5 class="media-heading">UI Design</h5>
              <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
            </div>
          </div>
        </div>
        <!--/.col-md-4-->
        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
          <div class="media service-box">
            <div class="pull-left"> <i class="fa fa-pie-chart"></i> </div>
            <div class="media-body">
              <h5 class="media-heading">Marketing</h5>
              <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
            </div>
          </div>
        </div>
        <!--/.col-md-4-->
        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="300ms">
          <div class="media service-box">
            <div class="pull-left"> <i class="fa fa-bar-chart"></i> </div>
            <div class="media-body">
              <h5 class="media-heading">SEO Services</h5>
              <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
            </div>
          </div>
        </div>
        <!--/.col-md-4-->
        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="400ms">
          <div class="media service-box">
            <div class="pull-left"> <i class="fa fa-language"></i> </div>
            <div class="media-body">
              <h5 class="media-heading">Android App</h5>
              <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
            </div>
          </div>
        </div>
        <!--/.col-md-4-->
        <div class="col-md-4 col-sm-6 col-xs-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="500ms">
          <div class="media service-box">
            <div class="pull-left"> <i class="fa fa-bullseye"></i> </div>
            <div class="media-body">
              <h5 class="media-heading">Clean Code</h5>
              <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
            </div>
          </div>
        </div>
        <!--/.col-md-4-->
      </div>
    </div>
    <div class="experience">
      <div class="col-sm-6 col-xs-12">
        <div class="our-skills wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
          <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="300ms">
            <p class="lead">HTML</p>
            <div class="progress">
              <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="90" style="width: 95%;"> 95% </div>
            </div>
          </div>
          <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="400ms">
            <p class="lead">CSS</p>
            <div class="progress">
              <div class="progress-bar six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="80" style="width: 80%;"> 80% </div>
            </div>
          </div>
          <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
            <p class="lead">BOOTSTRAP</p>
            <div class="progress">
              <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="100" aria-valuemax="80" style="width: 80%;"> 80% </div>
            </div>
          </div>
          <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
            <p class="lead">JAVASCRİPT</p>
            <div class="progress">
              <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="100" aria-valuemax="100" style="width: 100%;"> 100% </div>
            </div>
          </div>
          <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
            <p class="lead">JQUERY</p>
            <div class="progress">
              <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="100" aria-valuemax="70" style="width: 70%;"> 70% </div>
            </div>
          </div>
          <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
            <p class="lead">MYSQL</p>
            <div class="progress">
              <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="100" aria-valuemax="80" style="width: 80%;"> 80% </div>
            </div>
          </div>
          <div class="single-skill wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="600ms">
            <p class="lead">PHP</p>
            <div class="progress">
              <div class="progress-bar progress-bar-primary six-sec-ease-in-out" role="progressbar" aria-valuenow="0" aria-valuemin="100" aria-valuemax="100" style="width: 100%;"> 100% </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6  wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms"> <img src="images/m photo/WhatsApp Image 2022-04-15 at 02.55.00.jpeg" class="img-responsive" alt=""> </div>
    </div>
  </div>
</section>
<!--Features-Section-Start-->
<section id="features">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2><span>Ö</span>zƏl XüsusiyyƏtlƏrimiz</h2>
        <div class="line"></div>
        <p><span><strong>v</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
          et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>
    </div>
    <ul class="nav nav-tabs" role="tablist">
      <li role="presentation" class="active"><a href="#tab-1" role="tab" data-toggle="tab"><i class="fa fa-paper-plane"></i></a></li>
      <li role="presentation"><a href="#tab-2" role="tab" data-toggle="tab"><i class="fa fa-laptop"></i></a></li>
      <li role="presentation"><a href="#tab-3" role="tab" data-toggle="tab"><i class="fa fa-code"></i></a></li>
      <li role="presentation"><a href="#tab-4" role="tab" data-toggle="tab"><i class="fa fa-th-large"></i></a></li>
      <li role="presentation"><a href="#tab-5" role="tab" data-toggle="tab"><i class="fa fa-file-image-o"></i></a></li>
    </ul>
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade in active feat-sec" id="tab-1">
        <div class="col-md-6 tab">
          <h5>Web dzayn</h5>
          <div class="line"></div>
          <div class="clearfix"></div>
          <p class="feat-sec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing<br>
          </p>
          <p class="feat-sec-1">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound </p>
        </div>
        <div class="col-md-6 tab-img"><img src="images/Features/webdzayn.jpg" class="img-responsive" alt=""></div>
      </div>
      <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-2">
        <div class="col-md-6 tab">
          <h5>Qrafik dizayn</h5>
          <div class="line"></div>
          <div class="clearfix"></div>
          <p class="feat-sec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing<br>
          </p>
          <p class="feat-sec-1">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound </p>
        </div>
        <div class="col-md-6 tab-img"><img src="images/Features/qrafik.webp" class="img-responsive" alt=""></div>
      </div>
      <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-3">
        <div class="col-md-6 tab">
          <h5>Web  İnkişafı</h5>
          <div class="line"></div>
          <div class="clearfix"></div>
          <p class="feat-sec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing<br>
          </p>
          <p class="feat-sec-1">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound </p>
        </div>
        <div class="col-md-6 tab-img"><img src="images/Features/inkisaf.jpeg" class="img-responsive" alt=""></div>
      </div>
      <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-4">
        <div class="col-md-6 tab">
          <h5>Responsive dzayn</h5>
          <div class="line"></div>
          <div class="clearfix"></div>
          <p class="feat-sec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing<br>
          </p>
          <p class="feat-sec-1">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound </p>
        </div>
        <div class="col-md-6 tab-img"><img src="images/Features/responsive.jpg" class="img-responsive" alt=""></div>
      </div>
      <div role="tabpanel" class="tab-pane fade feat-sec" id="tab-5">
        <div class="col-md-6 tab">
          <h5>Yaradıcılıq Qalereyası</h5>
          <div class="line"></div>
          <div class="clearfix"></div>
          <p class="feat-sec">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing<br>
          </p>
          <p class="feat-sec-1">Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum."But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound </p>
        </div>
        <div class="col-md-6 tab-img"><img src="images/Features/yaradiciliq.jpg" class="img-responsive" alt=""></div>
      </div>
    </div>
  </div>
</section>
<!--Portfolio-Section-Start-->
<section id="portfolio" class='bg-danger'>
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2><span>P</span>ortfolio</h2>
        <div class="line"></div>
        <p><span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
          et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>
    </div>
    <div class="text-center">
      <ul class="portfolio-filter">
        <li><a class="active" href="#" data-filter="*">Bütün işlƏr</a></li>
        <li><a href="#" data-filter=".creative">Creative</a></li>
        <li><a href="#" data-filter=".corporate">Corporate</a></li>
        <li><a href="#" data-filter=".portfolio">Portfolio</a></li>
      </ul>
      <!--/#portfolio-filter-->
    </div>
    <div class="portfolio-items">
      <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item creative">
        <div class="portfolio-item-inner"><a  href='https://starex.az/'> <img class="img-responsive" src="images/Portfolio/starex.png" alt=""></a>
          <div class="portfolio-info"> <a class="preview" href="images/Portfolio/starex.png" data-rel="prettyPhoto"><i class="fa fa-plus-circle"></i></a>
            <h6>Starex.az</h6>
            <p>Üz qabigi</p>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->
      <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item corporate portfolio">
        <div class="portfolio-item-inner"> <img class="img-responsive" src="images/Portfolio/uplink.png" alt="">
          <div class="portfolio-info"> <a class="preview" href="images/Portfolio/uplink.png" data-rel="prettyPhoto"><i class="fa fa-plus-circle"></i></a>
            <h6>ITEM-2</h6>
            <p>Lorem Ipsum</p>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->
      <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item creative">
        <div class="portfolio-item-inner"> <img class="img-responsive" src="images/Portfolio/limak.png" alt="">
          <div class="portfolio-info"> <a class="preview" href="images/Portfolio/limak.png" data-rel="prettyPhoto"><i class="fa fa-plus-circle"></i></a>
            <h6>ITEM-3</h6>
            <p>Lorem Ipsum</p>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->
      <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item corporate">
        <div class="portfolio-item-inner"> <img class="img-responsive" src="images/Portfolio/04.jpg" alt="">
          <div class="portfolio-info"> <a class="preview" href="images/Portfolio/04.jpg" data-rel="prettyPhoto"><i class="fa fa-plus-circle"></i></a>
            <h6>ITEM-4</h6>
            <p>Lorem Ipsum</p>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->
      <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item creative portfolio">
        <div class="portfolio-item-inner"> <img class="img-responsive" src="images/Portfolio/05.jpg" alt="">
          <div class="portfolio-info"> <a class="preview" href="images/Portfolio/05.jpg" data-rel="prettyPhoto"><i class="fa fa-plus-circle"></i></a>
            <h6>ITEM-5</h6>
            <p>Lorem Ipsum</p>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->
      <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item corporate">
        <div class="portfolio-item-inner"> <img class="img-responsive" src="images/Portfolio/06.jpg" alt="">
          <div class="portfolio-info"> <a class="preview" href="images/Portfolio/06.jpg" data-rel="prettyPhoto"><i class="fa fa-plus-circle"></i></a>
            <h6>ITEM-6</h6>
            <p>Lorem Ipsum</p>
          </div>
        </div>
      </div>
      <!--/.portfolio-item-->
    </div>
  </div>
</section>
<!--Pricing-Section-Start-->
<!--<section id="pricing">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2><span>Q</span>İYMƏT PAKETLƏRİ</h2>
        <div class="line"></div>
        <p><span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
          et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="0ms">
          <ul class="pricing">
            <li class="plan-header">
              <div class="price-duration">
                <div class="price">100 AZN </div>
                <div class="duration"> per month </div>
              </div>
              <div class="plan-name"> Starter </div>
            </li>
            <li><strong>1</strong> DOMAIN</li>
            <li><strong>100GB</strong> DISK SPACE</li>
            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
            <li>SHARED SSL CERTIFICATE</li>
            <li><strong>10</strong> EMAIL ADDRESS</li>
            <li><strong>24/7</strong> SUPPORT</li>
            <li><a class="btn-order" href="#">Order Now</a> </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="200ms">
          <ul class="pricing">
            <li class="plan-header">
              <div class="price-duration">
                <div class="price"> 200 AZN </div>
                <div class="duration"> per month </div>
              </div>
              <div class="plan-name"> Business </div>
            </li>
            <li><strong>3</strong> DOMAIN</li>
            <li><strong>300GB</strong> DISK SPACE</li>
            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
            <li>SHARED SSL CERTIFICATE</li>
            <li><strong>30</strong> EMAIL ADDRESS</li>
            <li><strong>24/7</strong> SUPPORT</li>
            <li><a class="btn-order" href="#">Order Now</a> </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="400ms">
          <ul class="pricing">
            <li class="plan-header">
              <div class="price-duration">
                <div class="price"> 1200 AZN </div>
                <div class="duration"> per month </div>
              </div>
              <div class="plan-name"> Pro </div>
            </li>
            <li><strong>5</strong> DOMAIN</li>
            <li><strong>500GB</strong> DISK SPACE</li>
            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
            <li>SHARED SSL CERTIFICATE</li>
            <li><strong>50</strong> EMAIL ADDRESS</li>
            <li><strong>24/7</strong> SUPPORT</li>
            <li><a class="btn-order" href="#">Order Now</a> </li>
          </ul>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="wow zoomIn" data-wow-duration="400ms" data-wow-delay="600ms">
          <ul class="pricing">
            <li class="plan-header">
              <div class="price-duration">
                <div class="price"> 5000 AZN</div>
                <div class="duration"> per month </div>
              </div>
              <div class="plan-name"> Ultra </div>
            </li>
            <li><strong>10</strong> DOMAIN</li>
            <li><strong>1000GB</strong> DISK SPACE</li>
            <li><strong>UNLIMITED</strong> BANDWIDTH</li>
            <li>SHARED SSL CERTIFICATE</li>
            <li><strong>100</strong> EMAIL ADDRESS</li>
            <li><strong>24/7</strong> SUPPORT</li>
            <li><a class="btn-order" href="#">Order Now</a> </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>-->
<!--Team-Section-Start-->
<section id="team">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2><span>K</span>amandamiz</h2>
        <div class="line"></div>
        <p><span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
          et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp" data-wow-duration="1s" data-wow-delay=".1s">
        <div class="team-sec">
          <div class="team-img"> <img src="images/Team/sahil.png" class="img-responsive" alt="">
            <div class="team-desc">
              <h5>Sahil Zeynalli</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <ul class="team-social-icon">
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp" data-wow-duration="1s" data-wow-delay=".2s">
        <div class="team-sec">
          <div class="team-img"> <img src="images/Team/bill.jpg" class="img-responsive" alt="">
            <div class="team-desc">
              <h5>Bill Gates</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <ul class="team-social-icon">
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp" data-wow-duration="1s" data-wow-delay=".3s">
        <div class="team-sec">
          <div class="team-img"> <img src="images/Team/elon.jpeg" class="img-responsive" alt="">
            <div class="team-desc">
              <h5>Elon musk</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <ul class="team-social-icon">
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 team-main-sec wow slideInUp" data-wow-duration="1s" data-wow-delay=".4s">
        <div class="team-sec">
          <div class="team-img"> <img src="images/Team/mark.webp" class="img-responsive" alt="">
            <div class="team-desc">
              <h5>mark zuckerberg</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <ul class="team-social-icon">
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook-f"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Pinterest"><i class="fa fa-pinterest-p"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Instagram"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#" data-toggle="tooltip" data-placement="top" title="Google-plus"><i class="fa fa-google-plus"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!--index ehtiyyat  section
<section id="testimonials" class="parallex">
  <div class="container">
    <div class="quote"> <i class="fa fa-quote-left"></i> </div>
    <div class="clearfix"></div>
    <div class="slider-text">
      <div id="owl-testi" class="owl-carousel owl-theme">
        <div class="item">
          <div  class="col-md-10 col-md-offset-1"> <img src="images/Testimonials/02.jpg" class="img-circle" alt="">
            <h5>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.</h5>
            <h6>EMA JOHNSON</h6>
            <p>Web Developer</p>
          </div>
        </div>
        <div  class="col-md-10 col-md-offset-1"> <img src="images/Testimonials/03.jpg" class="img-circle" alt="">
          <h5>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur</h5>
          <h6>SAM DEEN</h6>
          <p>Web Designer</p>
        </div>
        <div  class="col-md-10 col-md-offset-1"> <img src="images/Testimonials/04.jpg" class="img-circle" alt="">
          <h5>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas</h5>
          <h6>JOHN DOE</h6>
          <p>CEO</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="fun-facts">
  <div class="container">
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="fun-fact text-center">
          <h3><i class="fa fa-thumbs-o-up"></i> <span class="timer">365</span></h3>
          <h6>Happy Clients</h6>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="fun-fact text-center">
          <h3><i class="fa fa-briefcase fa-6"></i> <span class="timer">73987</span></h3>
          <h6>Completed Projects</h6>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="fun-fact text-center">
          <h3><i class="fa fa-coffee"></i> <span class="timer">297345</span></h3>
          <h6>Cups of Coffee</h6>
        </div>
      </div>
      <div class="col-sm-6 col-md-3">
        <div class="fun-fact text-center">
          <h3><i class="fa fa-code"></i> <span class="timer">9823686</span></h3>
          <h6>Lines of Code</h6>
        </div>
      </div>
    </div>
  </div>
</section>
<section id="blog">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2>LATEST BL<span>OG</span></h2>
        <div class="line"></div>
        <p><span><strong>L</strong></span>orem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut 
          et dolore magna aliqua. Ut enim ad minim veniam</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="col-md-4 blog-sec">
          <div class="blog-info"> <img src="images/Blog/1.jpg" class="img-responsive" alt="">
            <div class="data-meta">
              <h4>Jan</h4>
              <strong>10</strong><br>
              2016 </div>
            <a href="#">
            <h5>Sed ut perspiciatis unde omnis</h5>
            </a>
            <ul class="blog-icon">
              <li><i class="fa fa-pencil"></i><a href="#">
                <h6>John</h6>
                </a></li>
              <li class="comment"><i class="fa fa-comment"></i><a href="#">
                <h6>13</h6>
                </a></li>
            </ul>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
            <a href="#" class="btn-blg">Read More</a> </div>
        </div>
        <div class="col-md-4 blog-sec">
          <div class="blog-info"> <img src="images/Blog/2.jpg" class="img-responsive" alt="">
            <div class="data-meta">
              <h4>Jan</h4>
              <strong>20</strong><br>
              2016 </div>
            <a href="#">
            <h5>Sed ut perspiciatis unde omnis</h5>
            </a>
            <ul class="blog-icon">
              <li><i class="fa fa-pencil"></i><a href="#">
                <h6>Maria</h6>
                </a></li>
              <li class="comment"><i class="fa fa-comment"></i><a href="#">
                <h6>04</h6>
                </a></li>
            </ul>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
            <a href="#" class="btn-blg">Read More</a> </div>
        </div>
        <div class="col-md-4 blog-sec">
          <div class="blog-info"> <img src="images/Blog/3.jpg" class="img-responsive" alt="">
            <div class="data-meta">
              <h4>Jan</h4>
              <strong>31</strong><br>
              2016 </div>
            <a href="#">
            <h5>Sed ut perspiciatis unde omnis</h5>
            </a>
            <ul class="blog-icon">
              <li><i class="fa fa-pencil"></i><a href="#">
                <h6>Bear</h6>
                </a></li>
              <li class="comment"><i class="fa fa-comment"></i><a href="#">
                <h6>05</h6>
                </a></li>
            </ul>
            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate.</p>
            <a href="#" class="btn-blg">Read More</a> </div>
        </div>
      </div>
    </div>
  </div>
</section>-->
<!--Client-Section-Start-->
<div id="client">
  <div class="container">
    <div id="client-slider" class="owl-carousel">
      <div class="item client-logo"> <a href="#"><img src="images/clients/1.png" class="img-responsive" alt=""/></a> </div>
      <div class="item client-logo"> <a href="#"><img src="images/clients/2.png" class="img-responsive" alt=""/></a> </div>
      <div class="item client-logo"> <a href="#"><img src="images/clients/3.png" class="img-responsive" alt=""/></a> </div>
      <div class="item client-logo"> <a href="#"><img src="images/clients/4.png" class="img-responsive" alt=""/></a> </div>
      <div class="item client-logo"> <a href="#"><img src="images/clients/5.png" class="img-responsive" alt=""/></a> </div>
      <div class="item client-logo"> <a href="#"><img src="images/clients/6.png" class="img-responsive" alt=""/></a> </div>
      <div class="item client-logo"> <a href="#"><img src="images/clients/7.png" class="img-responsive" alt=""/></a> </div>
    </div>
  </div>
</div>
<!--Contact-Section-Start-->
<section id="contact">
  <div class="container">
    <div class="col-md-8 col-md-offset-2">
      <div class="heading">
        <h2>CONTACT <span>US</span></h2>
        <div class="line"></div>
        <p><span><strong>G</strong></span>ünün istƏnilƏn saati ƏlaqƏ saxliyib sual ve 
        tƏkliflƏrinizi verƏ bilƏrsiniz</p>
      </div>
    </div>
    <div class="text-center">
      <div class="col-md-6 col-sm-6 contact-sec-1">
        <h4>CONTACT IN<span>FO</span></h4>
        <ul class="contact-form">
          <li><i class="fa fa-map-marker"></i>
            <h6><strong>Address:</strong> No 339 , Musfiqabad, Baki </h6>
          </li>
          <li><i class="fa fa-envelope"></i>
            <h6><strong>Mail Us:</strong> <a href="index.php">musfiq.emirov@mail.ru</a></h6>
          </li>
          <li><a href='https://wa.me/0557169791'><i class="fa fa-whatsapp"></i>
            <h6><strong>Whatsapp and phone:</strong> 055-716-97-91</a> </h6><br>
            <a href='https://wa.me/0514331219'> <i class="fa fa-whatsapp"></i>
            <h6><strong>Whatsapp and phone:</strong> 051-433-12-19</a></h6>
          </li>
          <li><i class="fa fa-wechat"></i>
            <h6><strong>Website:</strong> <a href="#">Musfiq.Əmirov.net</a> </h6>
          </li>
        </ul>
      </div>
      <!-- mesaj form-->
   <div class="col-md-6 col-sm-6">
      <!--form-->
        <form class="formmesaj_class" >
          <div class="row  wow fadeInDown" data-wow-duration="700ms" data-wow-delay="300ms">
          <h3><strong>Sohbete <span style='color:red'>başla</span> </strong>  </h3>
            
         <!--ad ve soyad inputu-->
            <div class="col-sm-6">
              <div class="form-group">
                <input type="text" name="formname" id="formname" class="form-control" placeholder="Ad ve soyad" required="required">
              </div>
            </div>
         <!--telefon inputu-->
            <div class="col-sm-6">
             <div class="form-group">
                <input type="tel" name="formtelefon"  id="formtelefon" class="form-control" placeholder="Telefon nomresi" required="required">
            </div>
            </div>
             <!--mail inputu-->
            <div class="form-group col-sm-12">
                <input type="email" name="formmail" id="formmail"  class="form-control" placeholder="Email Address" >
           </div>
             
          <!--mesaj inputu-->
            <div class="form-group col-sm-12">
                <textarea name="formmesaj" id="formmesaj" class="form-control" rows="4" placeholder="Mesajınızı daxil edin" required="required"></textarea>
            </div>
        </div>
         
          <p id='alert'></p>
          <div class="form-group">
          <button class="btn btn-primary form-control rounded-pill"  id='formgonder' type="button">gonder</button>

          </div>
        </form>
    </div>
<!--     -->
    </div>
  </div>
</section>
<footer id="footer">
  <div class="bg-sec">
    <div class="container">
    <h2>Oxuyub dəyərlədirdiyiniz üçün təşəkkür edirəm</h2>

    </div>
  </div>
</footer>
<footer id="footer-down">
<h2>İzləye bilərsiniz</h2>

  <ul class="social-icon">
    <li class="facebook hvr-pulse"><a href="#"><i class="fa fa-facebook-f"></i></a></li>
    <li class="twitter hvr-pulse"><a href="#"><i class="fa fa-twitter"></i></a></li>
    <li class="linkedin hvr-pulse"><a href="#"><i class="fa fa-linkedin"></i></a></li>
    <li class="google-plus hvr-pulse"><a href="#"><i class="fa fa-google-plus"></i></a></li>
    <li class="youtube hvr-pulse"><a href="#"><i class="fa fa-youtube"></i></a></li>
    <li class="instagram hvr-pulse"><a href="login.php"><i class="fa fa-instagram"></i></a></li>
    <li class="behance hvr-pulse"><a href="#"><i class="fa fa-behance"></i></a></li>
  </ul>
  <p> &copy; Musfiq Emirov : <a href="" target="_blank">etrafli</a> </p>
</footer>
<!--Jquery-->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!--Boostrap-Jquery-->
<script type="text/javascript" src="js/bootstrap.js"></script>
<!--Preetyphoto-Jquery-->
<script type="text/javascript" src="js/jquery.prettyPhoto.js"></script>
<!--NiceScroll-Jquery-->
<script type="text/javascript" src="js/jquery.nicescroll.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<!--Isotopes-->
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<!--Wow-Jquery-->
<script type="text/javascript" src="js/wow.js"></script>
<!--Count-Jquey-->
<script type="text/javascript" src="js/jquery.countTo.js"></script>
<script type="text/javascript" src="js/jquery.inview.min.js"></script>
<!--Owl-Crousels-Jqury-->
<script type="text/javascript" src="js/owl.carousel.js"></script>
<!--Main-Scripts-->
<script type="text/javascript" src="js/script.js"></script>


















<!--ajax-->
<script type="text/javascript">


      // form gonder
      $('#formgonder').click(function(){
        var name=$("#formname").val();
        var mail=$("#formmail").val();
        var telefon=$("#formtelefon").val();
        var mesaj=$("#formmesaj").val();
        if(name.length==0 || mail.length==0 || telefon.length==0 || mesaj.length==0){
          $('#alert').html('<div class="alert alert-danger">xanalari doldurun!!! !</div>');
        }else{ //mesajin goturulmesi
          $.ajax({
            type:'POST',
            url:'funksiya.php',
            data:$('.formmesaj_class').serialize(),
            success:function(cavab){
              if(cavab==70){
                Swal.fire(
                     'Tesekkurler',
                     'Mesajiniz ugurla gonderildi',
                     'success'
                    );
                    $('.formmesaj_class').trigger('reset');

              }
            }

          });

        }

    });
  
</script>
</body>
</html>

<!-- Hosting24 Analytics Code -->
<script type="text/javascript" src="http://stats.hosting24.com/count.php"></script>
<!-- End Of Analytics Code -->
