 <!doctype html>
<html lang="en">
  <head>
    <!--font awesome-->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">
    <!--css-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <link rel="icon" type="image/png" href="img/logo.png">
    <title>Sedekah Subuh</title>

  </head>
  <body data-spy="scroll" data-target=".navbar" data-offset="50" >
   <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light" >
      <div class="container">
         <a class="navbar-brand" href="#"><img src="img/logo.png" width="200"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 

        <div class="collapse navbar-collapse" >
          <div class="navbar-nav ml-auto">
             <a class="nav-item nav-link active" href="#">Beranda<span class="sr-only">(curret)</span></a>
             <a class="nav-item nav-link" href="#program">Program</a>
             <a class="nav-item nav-link" href="#kegiatan">Kegiatan</a>
             <a class="nav-item nav-link" href="#kontak">Kontak</a>
             <a class="nav-item nav-link" href="donasi.html">Donasi</a>
          </div>
       </div>
       </div>
    </nav>

    <section class="header">
        <div class="jumbotron jumbotron-fluid">
           <div class="container">
           <h1 class="display-4 text-center" style="margin-top: 150px;">Sedekah Menolong Kita</h1>
           </div>
        </div>
    </section>

    <section class="about">
        <div class="container">
          <h3 class="text-center">Sedekah Subuh</h3>
          <p class=" text-justify">Sedekah Subuh adalah program aksi nyata untuk mendukung gerakan nasional shalat subuh berjamaah di masjid dengan konten permberdayaan masyarakat dalam bidang kewirausahaan, pendidikan dan sosial. Dalam aksinya sedekah subuh bekerjasa sama dengan berbagai komunitas terpercaya di seluruh Indonesia khususnya sahabat subuh. Bersama sedekah subuh, Anda bisa berdonasi berupa zakat, wakaf, infaq dan khususnya lagi SEDEKAH SUBUH.</p>
        </div>  
    </section>
    </br>
    </br>
    <hr width="450" style="border:1px solid #444; ">

<section id="program" class="program" >
    <div class="container text-center pt-4">
      <h2>Program</h2>
      <div class="row pt-4">
        <div class="col-lg-3">
          <a href="tausyahsubuh.php"><img src="img/1.png" class="rounded-circle" width="230" height="150" style="margin-top: -10px;"></a>
          <p>Tausyah Subuh</p>
        </div>
        <div class="col-lg-3">
          <a href="makansubuh.php"><img src="img/2.png" class="rounded-circle" width="140" height="140"></a>
          <p>Sarapan Subuh</p>
        </div>
        <div class="col-lg-3">
          <a href="wakafsubuh.php"><img src="img/3.png" class="rounded-circle" width="140" height="140"></a>
          <p>Wakaf Subuh</p>
        </div>
         <div class="col-lg-3">
          <a href="santunansubuh.php"><img src="img/4.png" class="rounded-circle" width="170" height="140"></a>
          <p>Santunan Anak Yatim Subuh</p>
        </div>
      </div>
    </div>
</section>


<section id="kegiatan" class="kegiatan bg-light pb-4">
<div class="container">
  <div class="row mb-4 pt-5" >
    <div class="col text-center">
      <h2>Kegiatan</h2>
    </div>
  </div>

  <div class="row mb-4">
    <div class="col-md ">
      <div class="card" style="width: 21rem;">
      <?php 
          include 'conn.php';
        ?>
         <?php 
           $query=mysqli_query($conn,"SELECT * FROM `ptausiyah`");
            foreach ($query as $ptausiyah) {
        ?>

                  <b class="text-center"><?= $ptausiyah['nama']; ?></b>
                  <img class="card-img-top" src="img/kegiatan.jpg">
                
        <div class="card-body">
           <p class="card-text">
                  
                  <?= $ptausiyah['tempat']; ?><br />
                  <?= $ptausiyah['waktu']; ?><br />
                  <?= $ptausiyah['dana']; ?>
            </table>
            </p>
            <?php
          }
            ?>
       </div>
     </div>
   </div>
    <div class="col-md">
      <div class="card" style="width: 21rem;">
          <img class="card-img-top" src="img/kegiatan.jpg">
        <div class="card-body">
           <p class="card-text"></p>
       </div>
     </div>
   </div>
    <div class="col-md">
      <div class="card" style="width: 21rem;">
          <img class="card-img-top" src="img/kegiatan.jpg">
        <div class="card-body">
           <p class="card-text"></p>
       </div>
     </div>
   </div>
  </div>
  <div class="row mb-4">
    <div class="col-md">
      <div class="card" style="width: 21rem;">
          <img class="card-img-top" src="img/kegiatan.jpg">
        <div class="card-body">
           <p class="card-text"></p>
       </div>
     </div>
   </div>
</div>
</section>




  <!--start tim area-->
    <section class="tim">
      <div class="container">
        <h3 class="text-center mt-5">TIM SEDEKAH SUBUH</h3>
        <p class="text-center">Bergerak karena Ilahi Melayani dengan Sepenuh Hati</p>
        <div class="row mt-5">
          <div class="col-md-4" >
            <div class="t-box">
              <img src="img/tim.png">
              <p class="text-center col-md-10 mt-4 ">M. Dwi Febry</p>
              <hr>
              <p class="text-center col-md-10">Pembina</p>
            </div>       
          </div>
          <div class="col-md-4" >
            <div class="t-box">
              <img src="img/tim.png">
              <p class="text-center col-md-10 mt-4">Surya Fajar</p>
              <hr>
              <p class="text-center col-md-10">Pembina</p>
            </div>       
          </div>
          <div class="col-md-4" >
            <div class="t-box">
              <img src="img/tim.png">
              <p class="text-center col-md-10 mt-4 ">Titan Haryanggara</p>
              <hr> 
              <p class="text-center col-md-10">Koordinator</p>    
            </div>  
          </div>
        </div>
      </div>
    </section>
<!-- End tim Area -->

  
  <!--start kontak area-->
   <section id="kontak" class="contact mb-5 bg-light" >
  <div class="container">
    <div class="row pt-4 mb-4">
      <div class="col text-center">
        <h2>Contact Us</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-4">
        <div class="card text-white bg-primary mb-3 text-center">
          <div class="card-body">
            <h5 class="card-title">Contact Me</h5>
            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
          </div>
        </div>
        <ul class="list-group">
          <ul class="list-group-item"><h1>Location</h1></ul>
          <ul class="list-group-item">My Office</ul>
          <ul class="list-group-item">Bondowoso, Jawa Timur</ul>
          <ul class="list-group-item">West Java, Indonesia</ul>
        </ul>
      </div>

      <div class="col-lg-6">
        <form>
          <div class="form-group">
            <label for="exampleInputEmail1">Name</label>
            <input type="text" class="form-control" id="nama"  placeholder="Enter your Name">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Email</label>
            <input type="email" class="form-control" id="email"  placeholder="Enter your Email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">No. Phone</label>
            <input type="number" class="form-control" id="phone"  placeholder="Enter your No. Phone">
          </div>
          <div class="form-group">
            <label for="exampleInputEmail1">Message</label>
            <textarea class="form-control" id="message" placeholder="Enter your Message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
          <button type="reset" class="btn btn-danger">Reset</button>
        </form>
      </div>
    </div>
  </div>
</section>
 <!-- End kontak Area -->

 <!-- start footer Area -->    
      <footer class="footer-area section-gap">
        <div class="container">
          <div class="row" >
            <div class="col-lg-5 col-md-6 col-sm-6 ">
              <div class="single-footer-widget">
                <h6>About Us</h6>
                <p>
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore magna aliqua.
                </p>
                <p class="footer-text">
                      Copyright &copy;<script>docu  ment.write(new Date().getFullYear());</script> All rights reserved | Design Web by<i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="" target="_blank">Prima Itech Bondowoso</a>
                </p>                
              </div>
            </div>
                        
            <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
              <div class="single-footer-widget">
                <h6>Follow Us</h6>
                <p>Let us be social</p>
                <div class="footer-social d-flex align-items-center">
                  <a href="#"><i class="fab fa-facebook-square"></i></a>
                  <a href="#"><i class="fab fa-instagram"></i></a>
                  <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
              </div>
            </div>              
          </div>
        </div>
      </footer> 
  <!-- End footer Area -->  





    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
