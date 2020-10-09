<?php
include 'admin/koneksi.php';
// mengambil data jadwal praktikum dari database

// INIT KONEKSI
$con = mysqli_connect("localhost","root","","website");
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} 

// # PRAKTIKUM
$sql = "select * from praktikum";
$result = mysqli_query($con, $sql);
$data = mysqli_query($koneksi,"select * from praktikum");
$praktikum;
while($d=mysqli_fetch_assoc($data)){
  $praktikum[] = $d;
}

// # PERATURAN & FORMAT LABORATORIUM
$sql = "select * from setting WHERE id = 1";
$result = mysqli_query($con, $sql);
$data = mysqli_query($koneksi,"select * from setting");
$laboratorium;
while($d=mysqli_fetch_assoc($data)){
  $laboratorium[] = $d;
}

// # MODUL
$sql = "select * from modul";
$result = mysqli_query($con, $sql);
$data = mysqli_query($koneksi,"select * from modul");
$modul;
while($d=mysqli_fetch_assoc($data)){
  $modul[] = $d;
}

// # SOFTWARE
$sql = "select * from software";
$result = mysqli_query($con, $sql);
$data = mysqli_query($koneksi,"select * from software");
$modul;
while($d=mysqli_fetch_assoc($data)){
  $software[] = $d;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="HandheldFriendly" content="true">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="assets/css/modul.css?version1"></script>
  <title>Lab. Akuntansi Menengah | Universitas Gunadarma</title>
  <!-- Favicon -->
  <link rel="shortcut icon" href="assets/img/favicon1.ico" type="image/x-icon">
  <!-- Font awesome -->
  <link href="assets/css/font-awesome.css?version1" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="assets/css/bootstrap.css?version1" rel="stylesheet">
  <!-- Slick slider -->
  <link rel="stylesheet" type="text/css" href="assets/css/slick.css?version1">
  <!-- Date Picker -->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datepicker.css?version1">
  <!-- Gallery Lightbox -->
  <link href="assets/css/magnific-popup.css?version1" rel="stylesheet">
  <!-- Theme color -->
  <link id="switcher" href="assets/css/theme-color/blue-theme.css?version1" rel="stylesheet">
  <!-- Main style sheet -->
  <link rel="stylesheet" href="assets/css/style.css?version1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css?version1">
  <link rel="stylesheet" href="assets/css/modul.css?version1">
  <link rel="stylesheet" href="assets/css/video.css" <!-- Google Fonts -->
  <!-- Prata for body  -->
  <link href='https://fonts.googleapis.com/css?family=Prata' rel='stylesheet' type='text/css'>
  <!-- Francois one for small title -->
  <link href='https://fonts.googleapis.com/css?family=Francois+One&display=swap' rel='stylesheet' type='text/css'>
  <!-- Open Sans for title -->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>

  <style>
  .code {
    padding:25px;
    margin: 5px; border: 1px solid black;
    white-space: normal;
    min-height:250px;
    background-color:none;
    border:0;
  } 
</style>

</head>

<body>

  <!--StartWhatsapp Floating Button-->
  <script src="script.js"></script>
  <div class="floatingButtonWrap">
    <div class="floatingButtonInner">
      <a href="#" class="floatingButton">
        <i class="fa fa-whatsapp icon-default"></i>
      </a>
      <ul class="floatingMenu">
        <li>
          <a href="https://api.whatsapp.com/send?phone=6281288949990">Admin 1 Depok <span
              class="fa fa-whatsapp"></span></a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=6285891319743">Admin 2 Depok <span
              class="fa fa-whatsapp"></span></a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=6285815211415">Admin 3 Depok <span
              class="fa fa-whatsapp"></span></a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=6281287683884 ">Admin 1 Kalimalang <span
              class="fa fa-whatsapp"></span></a>
        </li>
        <li>
          <a href="https://api.whatsapp.com/send?phone=6281287683884 ">Admin 2 Kalimalang <span
              class="fa fa-whatsapp"></span></a>
        </li>

      </ul>
    </div>
  </div>
  <!--End Whatsapp Floating Button-->

  <!-- Start header section -->
  <header id="mu-header">
    <nav class="navbar navbar-default mu-main-navbar" role="navigation">
      <div class="container">
        <div class="navbar-header">

          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
            aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- LOGO -->
          <a class="navbar-brand" href="index.html"><img src="assets/img/LOGO4.PNG" alt="Logo img"></a>
          <!--End Logo-->

          <!--Navbar-->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right mu-main-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="#mu-about-us">Jadwal Praktikum</a></li>
            <li><a href="#mu-restaurant-menu">Peraturan Laboratorium</a></li>
            <li><a href="#mu-gallery">Format Laboratorium</a></li>
            <li><a href="#mu-modul">Modul</a></li>
            <li><a href="#mu-chef">Software</a></li>
            <li><a href="https://oprec.ak-menengah.com">OpenRecruitment</a></li>
          </ul>
        </div>
        <!--/.nav-collapse -->
      </div>
    </nav>
  </header>
  <!-- End header section -->


  <!-- Start slider  -->
  <section id="mu-slider">
    <div class="mu-slider-area">
      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">

          <div class="item active">
            <img src="assets/img/slider/5.jpg" alt="Los Angeles" style="width:100%;">
            <div class="carousel-caption">
              <h1>
                <font color="#4287f5">Selamat Datang</font>
              </h1>
              <p>di Lab. Akuntansi Menengah Universitas Gunadarma</p>
            </div>
          </div>

          <div class="item">
            <img src="assets/img/slider/4.jpg" alt="Chicago" style="width:100%;">
            <div class="carousel-caption">
              <h1>
                <font color="#4287f5">Selamat Datang</font>
              </h1>
              <p>di Lab. Akuntansi Menengah Universitas Gunadarma</p>
            </div>
          </div>

          <div class="item">
            <img src="assets/img/slider/3.jpg" alt="New York" style="width:100%;">
            <div class="carousel-caption">
              <h1>
                <font color="#4287f5">Selamat Datang</font>
              </h1>
              <p>di Lab. Akuntansi Menengah Universitas Gunadarma</p>
            </div>
          </div>

        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </section>
  <!-- End slider  -->

  <!-- Start Jadwal Praktikum -->
  <section id="mu-about-us">
    <div class="container">
      <div class="mu-title">
        <span class="mu-subtitle">Jadwal Praktikum</span>
        <h2>Lab. Akuntansi Menengah</h2>
      </div>
        <div class="container"></div>
        <div id="exTab3" class="container">
          <ul class="nav nav-pills">
            <li class="active">
              <a href="#1b" data-toggle="tab">Perangkat Lunak Akuntansi 1</a>
            </li>
            <li><a href="#2b" data-toggle="tab">Akuntansi Keuangan Menengah 1</a>
            </li>
            <li><a href="#3b" data-toggle="tab">Pemeriksaan Akuntansi 1</a>
            </li>
            <li><a href="#4a" data-toggle="tab">Akuntansi Keuangan Lanjut</a>
            </li>
            <li><a href="#5a" data-toggle="tab">Auditing 1</a>
            </li>
          </ul>

          <div class="tab-content clearfix">
            <div class="tab-pane active" id="1b">
              <div>

              <!-- Start Praktikum 1 -->
              <section id="mu-restaurant-menu">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-gallery-area">
                        <div class="page-description">
                              <img width="1140px" height="1079px" src="<?php echo $praktikum[0]['praktikum_file'] ?>">
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- End Praktikum 1 -->

              </div>
            </div>
            <div class="tab-pane" id="2b">
            <div>

              <!-- Start Praktikum 2 -->
              <section id="mu-restaurant-menu">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-gallery-area">
                        <div class="page-description">
                              <img width="1140px" height="1079px" src="<?php echo $praktikum[1]['praktikum_file'] ?>">
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- End Praktikum 2 -->

              </div>
            </div>
            <div class="tab-pane" id="3b">
            <div>

              <!-- Start Praktikum 3 -->
              <section id="mu-restaurant-menu">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-gallery-area">
                        <div class="page-description">
                              <img width="1140px" height="1079px" src="<?php echo $praktikum[2]['praktikum_file'] ?>">
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- End Praktikum 3 -->

              </div>
            </div>
            <div class="tab-pane" id="4a">
            <div>

              <!-- Start Praktikum 4 -->
              <section id="mu-restaurant-menu">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-gallery-area">
                        <div class="page-description">
                              <img width="1140px" height="1079px" src="<?php echo $praktikum[3]['praktikum_file'] ?>">
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- End Praktikum 4 -->

              </div>
            </div>
            <div class="tab-pane" id="5a">
            <div>

              <!-- Start Praktikum 5 -->
              <section id="mu-restaurant-menu">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="mu-gallery-area">
                        <div class="page-description">
                              <img width="1140px" height="1079px" src="<?php echo $praktikum[4]['praktikum_file'] ?>">
                          </h3>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>
              <!-- End Praktikum 5 -->

              </div>
            </div>
          </div>
        </div>
    </div>
    </center>
  </section>

  <!--Video-->
  <section id="video">
    <div class="container">
      <div class="mu-title">
        <span class="mu-subtitle">Video</span>
        <h2>Lab. Akuntansi Menengah</h2>
      </div>
      <!-- <div class="wrapper">
  
       <section id="section1">
          <a href="#section3"><</a>
           <div class="item">
              <iframe width="341" height="192" src="https://www.youtube.com/embed/LiE4DSfJnk0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
          <div class="item"><iframe width="341" height="192" src="https://www.youtube.com/embed/FMRNBYkMd6E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></div>
          <div class="item">
              <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABU0OxSusdsvLLJQJmd4aLYRtbf0Gwzcm3RvDZb7PbsR9uxLTbeRow9-AdQHdTY6NNuqA1FjCG6SKO3Kj5_5wLOkcc_Cf0xoNfTDgiQwqhvn9aQz0iok1B0-xum_y1GQlna6wjOUHeDKGKMmkzQviRxJReAXvViIQF9r01SlmVerSBTMFGKHb_M4.jpg?r=0bb" alt="">
            </div>
          <div class="item">
              <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcnDjV81nHTPLlc3qr6oFS-0Zfl8D2XHwfmXvjv_xnddIIimeLIogqHhuh68k25GKjujJaKcd_mLWhzescG2btCz0e7AyxvsnzULvMQHD5MjExyZ_A5eCAFyInqgtkmeAw.webp?r=087" alt="">
            </div>
          <div class="item">
              <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYVZbqz_uitE0A1OmhKLo3WWuKlxVcPkV9Iaa2jtC-3OBvD1S8h27ov27K2A5e1Gvpt8TYTMPIroq_UtCn28Ho8rIxg.webp?r=eab" alt="">
            </div>
          <a href="#section2">></a>
        </section>
        <section id="section2">
          <a href="#section1"><</a>
         <div class="item">
              <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbPBk8_IdBldVjmdkrmI7GhuezdUxXkke78kdphsP6VjAOliDpxCOHETSkjb_VAJrOhywYysNzsuRIpVG2_ohf0HRFM.webp?r=c91" alt="Movie">
            </div>
          <div class="item"><img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS6zH-iStSenOH0mjn25TzShBYNjxaaRxoy-qiV0Zr3Al0IfpvbRuotjXEd_CzUAfyWVJXLU-Nm8mAU4iD7WGVe3nQw.webp?r=efe" alt=""></div>
          <div class="item">
              <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcohRaSbGpLnF4aE4McQ4wNlBOKJKxOjWffRtLpTawR1LZxjfIvqmV7d8_O7-fcRo_Hi8EcIVFVdGARrasvLzuMjJWp3BXN5oE3JwQYARCqTxQ9nyxlneZrQOoqB.jpg?r=ef7" alt="">
            </div>
          <div class="item">
              <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABaz4PeFnJi_t7-Z8YlhZ4WJkwc7VTv_KnMGbf7qsZvsIvxymRUQPiG5-TLaKRYbSpyrB_M7pqaPcAgx7DWAzDvYyIQU.webp?r=991" alt="">
            </div>
          <div class="item">
              <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQO417AoaMguF_DtQ1zOivjKkMZEpP5zA1YFG1zwSewxnHSW3UyRVVbIUbhMdVsXnZzFolmiO9x3tteyklzoM_fZ9VA.webp?r=a8a" alt="">
            </div>
          <a href="#section3">></a>
        </section>
        <section id="section3">
          <a href="#section2"><</a>
          <div class="item">
              <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABe4dJ_YqYuo413Lc5SEgnaePcQsT0Mpc7tC3LrV5SO-Kr_AIvSBrQQW6d5ARfa-jC-_yExqzthXKrDHFZpQ1T572KNY.webp?r=282" alt="Movie">
            </div>
          <div class="item"><img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABSf_yKl73k9vuaUJhhXEC9J1ikgRvKdUelKB6u71LK2lwu0CDxX1PrT0nHn-heQ8HYSdaYVLuUjaG0iyOo0puUZxTfO4CkjX1CSwPeDyafOPk2S2bGuybJc__kA2.jpg?r=461" alt=""></div>
          <div class="item">
              <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABRLYHWL2TnYwlAlSsIhA0EimIh_pSxSojzbLEeph3dQnS7BkEz6D_4jWGGK5-t9jmfg5KXVEwHeucPvEHrsUcF2sbw2t4AUHoALvjw06JE0HU93pJdDnjVELlXOD2d2P01w9-l-LxkfKLl1BEu_vPTZStnV9Ug.jpg?r=b92" alt="">
            </div>
          <div class="item">
              <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZJWr_EF3i_rm2KHc63sxp6-reV49y2G_Fnunat-J0ewO2HYp9ZfATeyrw37lbUY9Cl3xbOwgn7sd7P5mayk6NRZP4hP6yWhJiPYtbR0wl2Bn0frAXb4n8iCQ8Jy.jpg?r=c77" alt="">
            </div>
          <div class="item">
              <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABW-ll2bCfjPkVfetBwGs3UQ8JbOOY0_gC7B94qJIiBU-vvKMqpKFqbBd3RgYm1dWKtYv2LgUheB6lfiuoQS0xaCms9U.webp?r=190" alt="">
            </div> 
          <a href="#section1">></a>
            </section>  
      </div>  -->
      </div>
    </section>

<div class="wrapper">
  <section id="section1">
    <a href="#section3" class="arrow__btn">‹</a>
    <div class="item">
    <iframe width="341" height="192" src="https://www.youtube.com/embed/LiE4DSfJnk0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
    <div class="item">
    <iframe width="341" height="192" src="https://www.youtube.com/embed/FMRNBYkMd6E" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  </div>
    <div class="item">
    <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABU0OxSusdsvLLJQJmd4aLYRtbf0Gwzcm3RvDZb7PbsR9uxLTbeRow9-AdQHdTY6NNuqA1FjCG6SKO3Kj5_5wLOkcc_Cf0xoNfTDgiQwqhvn9aQz0iok1B0-xum_y1GQlna6wjOUHeDKGKMmkzQviRxJReAXvViIQF9r01SlmVerSBTMFGKHb_M4.jpg?r=0bb" alt="">
  </div>
    <div class="item">
    <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcnDjV81nHTPLlc3qr6oFS-0Zfl8D2XHwfmXvjv_xnddIIimeLIogqHhuh68k25GKjujJaKcd_mLWhzescG2btCz0e7AyxvsnzULvMQHD5MjExyZ_A5eCAFyInqgtkmeAw.webp?r=087" alt="">
  </div>
    <div class="item">
    <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABYVZbqz_uitE0A1OmhKLo3WWuKlxVcPkV9Iaa2jtC-3OBvD1S8h27ov27K2A5e1Gvpt8TYTMPIroq_UtCn28Ho8rIxg.webp?r=eab" alt="">
  </div>
    <a href="#section2" class="arrow__btn">›</a>
  </section>
  <section id="section2">
    <a href="#section1" class="arrow__btn">‹</a>
    <div class="item">
    <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABbPBk8_IdBldVjmdkrmI7GhuezdUxXkke78kdphsP6VjAOliDpxCOHETSkjb_VAJrOhywYysNzsuRIpVG2_ohf0HRFM.webp?r=c91" alt="Movie">
  </div>
    <div class="item">
    <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABS6zH-iStSenOH0mjn25TzShBYNjxaaRxoy-qiV0Zr3Al0IfpvbRuotjXEd_CzUAfyWVJXLU-Nm8mAU4iD7WGVe3nQw.webp?r=efe" alt="">
  </div>
    <div class="item">
    <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABcohRaSbGpLnF4aE4McQ4wNlBOKJKxOjWffRtLpTawR1LZxjfIvqmV7d8_O7-fcRo_Hi8EcIVFVdGARrasvLzuMjJWp3BXN5oE3JwQYARCqTxQ9nyxlneZrQOoqB.jpg?r=ef7" alt="">
  </div>
    <div class="item">
    <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABaz4PeFnJi_t7-Z8YlhZ4WJkwc7VTv_KnMGbf7qsZvsIvxymRUQPiG5-TLaKRYbSpyrB_M7pqaPcAgx7DWAzDvYyIQU.webp?r=991" alt="">
  </div>
    <div class="item">
    <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABQO417AoaMguF_DtQ1zOivjKkMZEpP5zA1YFG1zwSewxnHSW3UyRVVbIUbhMdVsXnZzFolmiO9x3tteyklzoM_fZ9VA.webp?r=a8a" alt="">
  </div>
    <a href="#section3" class="arrow__btn">›</a>
  </section>
  <section id="section3">
    <a href="#section2" class="arrow__btn">‹</a>
    <div class="item">
    <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABe4dJ_YqYuo413Lc5SEgnaePcQsT0Mpc7tC3LrV5SO-Kr_AIvSBrQQW6d5ARfa-jC-_yExqzthXKrDHFZpQ1T572KNY.webp?r=282" alt="Movie">
  </div>
    <div class="item">
    <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABSf_yKl73k9vuaUJhhXEC9J1ikgRvKdUelKB6u71LK2lwu0CDxX1PrT0nHn-heQ8HYSdaYVLuUjaG0iyOo0puUZxTfO4CkjX1CSwPeDyafOPk2S2bGuybJc__kA2.jpg?r=461" alt="">
  </div>
    <div class="item">
    <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABRLYHWL2TnYwlAlSsIhA0EimIh_pSxSojzbLEeph3dQnS7BkEz6D_4jWGGK5-t9jmfg5KXVEwHeucPvEHrsUcF2sbw2t4AUHoALvjw06JE0HU93pJdDnjVELlXOD2d2P01w9-l-LxkfKLl1BEu_vPTZStnV9Ug.jpg?r=b92" alt="">
  </div>
    <div class="item">
    <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABZJWr_EF3i_rm2KHc63sxp6-reV49y2G_Fnunat-J0ewO2HYp9ZfATeyrw37lbUY9Cl3xbOwgn7sd7P5mayk6NRZP4hP6yWhJiPYtbR0wl2Bn0frAXb4n8iCQ8Jy.jpg?r=c77" alt="">
  </div>
    <div class="item">
    <img src="https://occ-0-4093-769.1.nflxso.net/dnm/api/v6/X194eJsgWBDE2aQbaNdmCXGUP-Y/AAAABW-ll2bCfjPkVfetBwGs3UQ8JbOOY0_gC7B94qJIiBU-vvKMqpKFqbBd3RgYm1dWKtYv2LgUheB6lfiuoQS0xaCms9U.webp?r=190" alt="">
  </div>
    <a href="#section1" class="arrow__btn">›</a>
  </section>
</div>

      <!-- Start Peraturan  -->
      <section id="mu-restaurant-menu">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-gallery-area">

                <div class="mu-title">
                  <span class="mu-subtitle">Peraturan</span>
                  <h2>Lab. Akuntansi Menengah</h2>
                </div>
                <div class="page-description">
                       <img width="1140px" height="1079px" src="<?php echo $laboratorium[0]['peraturan_laboratorium'] ?>">
                  </h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Peraturan -->

      <!-- Start Laporan Akhir -->
      <section id="mu-gallery">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div class="mu-gallery-area">
                <div class="mu-title">
                  <span class="mu-subtitle">Format Laboratorium</span>
                </div>
                <div class="page-description">
                  <h3 style="text-align: center;"><b>Cover Buku Tugas</b><br />
                    <img src="assets/buku_tugas/contoh_cover_001.jpg">
                    <h2>Download Cover Buku Tugas</h2>

                    <div class="accordion">
                      <div class="accordion-item">
                        <a>Cover Buku Tugas</a>
                        <div class="content">
                          <a href="assets/buku_tugas/DEPOK_PTA.pdf">Download Cover Buku Tugas Depok</a>
                          <a href="assets/buku_tugas/KALIMALANG_PTA.pdf">Download Cover Buku Tugas Kalimalang</a>
                          <a href="assets/buku_tugas/KARAWACI_PTA.pdf">Download Cover Buku Tugas Karawaci</a>
                          <a href="assets/buku_tugas/CENGKARENG_PTA.pdf">Download Cover Buku Tugas Cengkareng</a>
                        </div>
                      </div>
                      <br />
                      <h3 style="text-align: center;"><b>Laporan Akhir</b><br />
                        <img width="1140px" height="1079px" src="<?php echo $laboratorium[0]['format_laboratorium'] ?>">
                    </div>
                    <div class="multipage-links">
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>>
    </div>
  </section>

  <!-- End Laporan Akhir -->


  <!-- Modul Section -->
  <section id="mu-modul">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
            <div class="mu-title">
              <span class="mu-subtitle">Modul</span>
              <h2>Lab. Akuntansi Menengah</h2>
            </div>
            <div class="container">
              <h2>Download Modul</h2>

              <div class="accordion">
                <div class="accordion-item">
                  <a><?php echo $modul[0]['modul_nama']; ?></a>
                  <div class="content">
                    <a href="<?php echo $modul[0]['modul_file']; ?>"> Download Modul</a>
                  </div>
                </div>
                <div class="accordion-item">
                <a><?php echo $modul[1]['modul_nama']; ?></a>
                  <div class="content">
                  <a href="<?php echo $modul[1]['modul_file']; ?>"> Download Modul</a>
                  </div>
                </div>
                <div class="accordion-item">
                <a><?php echo $modul[2]['modul_nama']; ?></a>
                  <div class="content">
                  <a href="<?php echo $modul[2]['modul_file']; ?>"> Download Modul</a>
                  </div>
                </div>
                <div class="accordion-item">
                <a><?php echo $modul[3]['modul_nama']; ?></a>
                  <div class="content">
                  <a href="<?php echo $modul[3]['modul_file']; ?>"> Download Modul</a>
                  </div>
                </div>
                <div class="accordion-item">
                <a><?php echo $modul[4]['modul_nama']; ?></a>
                  <div class="content">
                  <a href="<?php echo $modul[4]['modul_file']; ?>"> Download Modul</a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
    <script>
      const items = document.querySelectorAll(".accordion a");
      function toggleAccordion() {
        this.classList.toggle('active');
        this.nextElementSibling.classList.toggle('active');
      }
      items.forEach(item => item.addEventListener('click', toggleAccordion));</script>
  </section>

  <!-- End Modulsection -->

  <!--Software Section-->
  <section id="mu-chef">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
            <div class="mu-title">
              <span class="mu-subtitle">Software</span>
              <h2>Lab. Akuntansi Menengah</h2>
            </div>
            <div class="mu-gallery-content">
              <!-- Start gallery image -->
              <div class="mu-gallery-body">
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-3">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                      <a href="<?php echo $software[0]['software_file']; ?>" target="_blank">
                        <img alt="img" src="<?php echo $software[0]['software_logo']; ?>" >
                        <div class="mu-single-gallery-info">
                        </div>
                      </a>
                    </figure>
                  </div>
                </div>
                <!-- End single gallery image -->
                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                    <a href="<?php echo $software[1]['software_file']; ?>" target="_blank">
                        <img alt="img" src="<?php echo $software[1]['software_logo']; ?>" >
                        <div class="mu-single-gallery-info">
                        </div>
                      </a>
                    </figure>
                  </div>
                </div>
                <!-- End single gallery image -->

                <!-- start single gallery image -->
                <div class="mu-single-gallery col-md-4">
                  <div class="mu-single-gallery-item">
                    <figure class="mu-single-gallery-img">
                    <a href="<?php echo $software[2]['software_file']; ?>" target="_blank">
                        <img alt="img" src="<?php echo $software[2]['software_logo']; ?>" >
                        <div class="mu-single-gallery-info">
                        </div>
                      </a>
                    </figure>
                  </div>
                </div>
                <!-- End single gallery image -->

                <!-- Start gallery image -->
                <div class="mu-gallery-body">
                  <!-- start single gallery image -->
                  <div class="mu-single-gallery col-md-4">
                    <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                      <a href="<?php echo $software[3]['software_file']; ?>" target="_blank">
                        <img alt="img" src="<?php echo $software[3]['software_logo']; ?>" >
                        <div class="mu-single-gallery-info">
                        </div>
                      </a>
                      </figure>
                    </div>
                  </div>
                  <!-- End single gallery image -->

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </section>
  <!-- End About us -->

  <section id="mu-restaurant-menu">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
            <div class="mu-title">
              <span class="mu-subtitle">Galeri Kegiatan</span>
              <h2>Lab. Akuntansi Menengah</h2>
            </div>
            <center>
              <div class="mu-gallery-content">
                <!-- Start gallery image -->
                <div class="mu-gallery-body">
                  <!-- start single gallery image -->
                  <div class="mu-single-gallery col-md-4">
                    <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/Galeri_1.jpg">
                          <img alt="img" src="assets/img/gallery/Galeri_1.jpg">
                          <div class="mu-single-gallery-info">
                            <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div>
                        </a>
                      </figure>
                    </div>
                  </div>
                  <!-- End single gallery image -->

                  <!-- start single gallery image -->
                  <div class="mu-single-gallery col-md-4">
                    <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/Galeri_2.jpg">
                          <img alt="img" src="assets/img/gallery/Galeri_2.jpg">
                          <div class="mu-single-gallery-info">
                            <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div>
                        </a>
                      </figure>
                    </div>
                  </div>
                  <!-- End single gallery image -->

                  <!-- start single gallery image -->
                  <div class="mu-single-gallery col-md-4">
                    <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/Galeri_10.jpg">
                          <img alt="img" src="assets/img/gallery/Galeri_10.jpg">
                          <div class="mu-single-gallery-info">
                            <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div>
                        </a>
                      </figure>
                    </div>
                  </div>
                  <!-- End single gallery image -->

                  <!-- start single gallery image -->
                  <div class="mu-single-gallery col-md-4">
                    <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/Galeri_11.JPG">
                          <img alt="img" src="assets/img/gallery/Galeri_11.JPG">
                          <div class="mu-single-gallery-info">
                            <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div>
                        </a>
                      </figure>
                    </div>
                  </div>
                  <!-- End single gallery image -->
                  <!-- start single gallery image -->
                  <div class="mu-single-gallery col-md-4">
                    <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/Galeri_12.jpg">
                          <img alt="img" src="assets/img/gallery/Galeri_12.jpg">
                          <div class="mu-single-gallery-info">
                            <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div>
                        </a>
                      </figure>
                    </div>
                  </div>

                  <!-- End single gallery image -->
                  <!-- start single gallery image -->
                  <div class="mu-single-gallery col-md-4">
                    <div class="mu-single-gallery-item">
                      <figure class="mu-single-gallery-img">
                        <a class="mu-imglink" href="assets/img/gallery/Galeri_7.jpg">
                          <img alt="img" src="assets/img/gallery/Galeri_7.jpg">
                          <div class="mu-single-gallery-info">
                            <img class="mu-view-btn" src="assets/img/plus.png" alt="plus icon img">
                          </div>
                        </a>
                      </figure>
                    </div>
                  </div>

                  <!-- End single gallery image -->

            </center>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>
  <!-- End Gallery -->



  <!-- Start Footer -->
  <footer id="mu-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-footer-area">
            <div class="mu-footer-social">
              <a href="http://www.instagram.com/labamen_ug"><span class="fa fa-instagram"></span></a>

            </div>
            <div class="mu-footer-copyright">
              <p>&copy; Copyright <a rel="nofollow">Laboratorium Akuntansi Menengah Universitas Gunadarma</a>. All right
                reserved.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End Footer -->

  <!-- jQuery library -->

  <script src="assets/js/jquery.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="assets/js/bootstrap.js"></script>
  <!-- Slick slider -->
  <script type="text/javascript" src="assets/js/slick.js"></script>
  <!-- Gallery Lightbox -->
  <script type="text/javascript" src="assets/js/jquery.magnific-popup.min.js"></script>
  <!-- Date Picker -->
  <script type="text/javascript" src="assets/js/bootstrap-datepicker.js"></script>
  <!-- Ajax contact form  -->
  <script type="text/javascript" src="assets/js/app.js"></script>
  <!--Modul.js-->
  <script type="text/javascript" src="assets/js/modul.js"></script>
  <!-- Custom js -->
  <script src="assets/js/custom.js"></script>
  <script>
    $(window).load(function () {
      $('#myModal').modal('show');
    }); 
  </script>
</body>

</html>