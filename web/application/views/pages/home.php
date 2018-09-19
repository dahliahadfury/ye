<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AYODEV</title>
    
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/home.css">

    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</head>

<body>
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
    <nav class="navbar navbar-expand-lg navbar-light" id="header" style="z-index: 500; " >
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown"  >
        <ul class="navbar-nav">   
        <img src="<?php echo base_url(); ?>asset/logo resize.png">                       
            <li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="<?php echo base_url() ?>">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="#about">About Us</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="#department">Department</a>
            </li>
            <!-- <li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="<?php //echo base_url() ?>Pages/structure">Structure</a>
            </li> -->
            <li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="#contact">Contact</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="<?php echo base_url() ?>">Module</a>
            </li>        
            <?php if (!$this->session->userdata('logged_in') && !$this->session->userdata('admin')):?>
            <li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="<?php echo base_url() ?>User/login">Log In</a>
            </li>
            <?php endif; ?>

            <?php if ($this->session->userdata('logged_in') && !$this->session->userdata('admin')):?>
            <li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="<?php echo base_url() ?>">Profile</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="<?php echo base_url() ?>User/logout">Log Out</a>
            </li>
            <?php endif; ?>

            <?php if ($this->session->userdata('logged_in') && $this->session->userdata('admin') ):?>
            <li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="<?php echo base_url() ?>">Profile</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="<?php echo base_url() ?>">Edit Module</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="<?php echo base_url() ?>User/logout">Log Out</a>
            </li>
            <?php endif; ?>

            <script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("header").style.top = "-90px";
  } else {
    document.getElementById("header").style.top = "0";
  }
  prevScrollpos = currentScrollPos;
}
</script>

        </ul>
        </div>
    </nav>
<div id='title'>
             <center>
                    <div class="d-flex align-items-end flex-column bd-highlight mb-3" id="wrap" style="margin-top: -50px;" >
                    <img src="<?php echo base_url(); ?>asset/home.png">
                        <div class="p-2 bd-highlight" id="flex1">
                        <li class="nav-item dropdown" id="dropdown">
                        <a class="btn btn-outline-light btn-sm btn-secondary dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="dropdown">
                          pilih disini
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo base_url() ?>">Home</a>
                            <a class="dropdown-item" href="#about">About Us</a>
                            <a class="dropdown-item" href="#department">Department</a>
                            <!-- <a class="dropdown-item" href="<?php //echo base_url() ?>Pages/structure">Structure</a> -->
                                                             
                            <a class="dropdown-item" href="#contact">Contact</a>
                            <a class="dropdown-item" href="<?php echo base_url() ?>Pages/module">Module</a>
                            <?php if (!$this->session->userdata('logged_in') && !$this->session->userdata('admin')):?>
                            <a class="dropdown-item" href="<?php echo base_url() ?>User/login">Log In</a>
                            <?php endif; ?>

                            <?php if ($this->session->userdata('logged_in') && !$this->session->userdata('admin')):?>
                            <a class="dropdown-item" href="<?php echo base_url() ?>">Profile</a>
                            <a class="dropdown-item" href="<?php echo base_url() ?>User/logout">Log Out</a>
                            <?php endif; ?>

                            <?php if ($this->session->userdata('logged_in') && $this->session->userdata('admin') ):?>
                            <a class="dropdown-item" href="<?php echo base_url() ?>">Profile</a>
                            <a class="dropdown-item" href="<?php echo base_url() ?>">Edit Module</a>
                            <a class="dropdown-item" href="<?php echo base_url() ?>User/logout">Log Out</a>
                            <?php endif; ?>
                         

                  
                        </div>
                     </li>
                        </div>
                    </div>
                   
                    <!-- <div class="d-flex align-items-end flex-column bd-highlight mb-3" id="wrap" style="height: 200px;" > -->
        <div id="about" data-aos="fade-up" data-aos-duration="3000" style="margin-top: -400px">
              <div class="mainContainer">     

              <section>
                  <div class="container">
                      <div class="contentContainer" style="background: transparent" >
                  <div class="Content">
                    <br>
                    <h2 style="color: white;">About</h2>
                    <div class="col-sm-12" >
                      <!-- <div class="row"> -->
                          <div class="col-sm-20">
                            <p style="font-size: 20px; color: white; border-width: 3px; border-color: white; border-radius: 100% "> AyoDev adalah suatu komunitas yang menaungi mahasiswa informatika dalam bereksplorasi, belajar, dan berkarya dalam bidang web dan mobile apps. AyoDev juga mewadahi mahasiswa informatika yang ingin mempelajari tentang desain UI dan UX.  Kemudian peserta akan dikelompokkan menjadi beberapa tim yang tergabung dari tiap department yang nantinya akan diikutkan ke berbagai kompetisi. </p>
                        </div>
                        
                      <!-- </div> -->
                        
                    </div>
                    
                  </div>
                </div>
                  </div>
                
                </section>
              </div>
        </div>

        <div id="department" data-aos="fade-up" data-aos-duration="3000" style="margin-top: -350px">
              <div class="mainContainer"> 
                <section>
                    <div class="container">
                        <div class="contentContainer" style="background: transparent";>
                    <div class="Content">
                      <br>
                      <h2 style="color: white;">Department</h2>
                      <div class="col-sm-12">
                        <div class="row" >
                            <div data-aos="zoom-out-up" class="col-sm-4">
                              <div class="icon"> 
                                <img src="<?php echo base_url(); ?>asset/icon/web.png" style="width: 10%;height: 10%;">
                                

                              </div>
                              
                              <p style="font-size: 14px; color: white;"> AyoDev adalah suatu komunitas yang menaungi mahasiswa informatika dalam bereksplorasi, belajar, dan berkarya dalam bidang web dan mobile apps. </p>
                            </div>
                            <div data-aos="zoom-out-up" class="col-sm-4">
                              <div class="icon"> 
                                <img src="<?php echo base_url(); ?>asset/icon/mobile.png" style="width: 10%;height: 10%;">
                                 

                              </div>
                              
                              <p style="font-size: 14px; color: white;"> AyoDev juga mewadahi mahasiswa informatika yang ingin mempelajari tentang desain UI dan UX.</p>
                            </div>
                            <div data-aos="zoom-out-up" class="col-sm-4">
                               
                                <h5 style="margin-top: 35px; margin-bottom: 15px;">ui/ux</h5>                                 

                            
                              <p style="font-size: 14px; color: white;">Kemudian peserta akan dikelompokkan menjadi beberapa tim yang tergabung dari tiap department yang nantinya akan diikutkan ke berbagai kompetisi. </p>
                            </div>
                          
                        </div>          
                      </div>
                      
                    </div>
                  </div>
                    </div>
                  
                  </section>
              </div>
        </div>

         <div id="contact" data-aos="fade-up" data-aos-duration="3000" style="margin-top: -350px">
              <div class="mainContainer">     

              <section>
                  <div class="container">
                      <div class="contentContainer" style="background: transparent" >
                  <div class="Content">
                    
                    <br>
                    <h2 style="color: white;">Contact</h2>
                    <div class="col-sm-12">
                      <!-- <div class="row"> -->
                          <div class="col-sm-20">
                            <div data-aos="zoom-out-up" >
                            <div class="icon">
                              <img src="<?php echo base_url(); ?>asset/icon/line.png" style="width: 50%;height: 50%;">
                            </div>
                          </div>
                          <div data-aos="zoom-out-up" >
                            <div class="icon">
                              <img src="<?php echo base_url(); ?>asset/icon/mail.png" style="width: 50%;height: 50%; margin-top: 50px;">
                            </div>
                          </div>
                        </div>
                        
                      <!-- </div> -->
                        
                    </div>
                    
                  </div>
                </div>
                  </div>
                
                </section>
              </div>
        </div>





<!-- </div> -->
<br>
<br>


            <div class="footer">
            <p>Copyright 2018 AYODEV Studio. All rights reserved</p>
            </div>
            
            </center>

        </span>
      </section>
</div>


    <script>
  AOS.init();
</script>

</body>

</html>