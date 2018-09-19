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
    <style>
        #title {
            position: absolute;
            top: 50%;
            left: 0;
            right: 0;
            color: #FFF;
            text-align: center;
            font-family: "lato", sans-serif;
            font-weight: 300;
            font-size: 50px;
            letter-spacing: 10px;
            margin-top: -120px;
            padding-left: 150px;
        }
        #title span {
            background: -webkit-linear-gradient(white, #38495a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
        `#thumbnail{
        }
        .navbar{
        	 background: #090a0f !important;
            overflow: hidden;
        }
		.col-sm-2{
			border: 2px solid;
			background: linear-gradient( #1b2735 , #090a0f );
			border-radius: 10px;
			height: 160px;
			width:48%; margin:0 2% /* or auto */;
		}
		#row-1{
			/*margin-left: 300px;*/
		}
		.footer{
            font-size: 11px;
            /*background-color: transparent;*/
            margin-top: 330px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            color: white;
            text-align: center;
            letter-spacing: 2px;
        }
        @keyframes animStar {
            from {
                transform: translateY(0px);
            }
            to {
                transform: translateY(-2000px);
            }
        }
    </style>
</head>

<body>
    <div id='stars'></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
    <nav class="navbar navbar-expand-lg navbar-light" style="margin-top: -8px;">
  		<!-- <a class="navbar-brand" href="#">Navbar</a> -->
  		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  		</button>
  		<div class="collapse navbar-collapse" id="navbarNavDropdown">
    	<ul class="navbar-nav">      		     		
      		<li class="nav-item">
      		<a class="nav-link" style="color: #FFF" href="<?php echo base_url() ?>">Home</a>
      		</li>
      		<li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="<?php echo base_url() ?>">About Us</a>
        	</li>
        	<li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="<?php echo base_url() ?>Pages/structure">Structure</a>
        	</li>
        	<li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="<?php echo base_url() ?>">Module</a>
        	</li>
        	<li class="nav-item">
            <a class="nav-link" style="color: #FFF" href="<?php echo base_url() ?>">Contact</a>
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

     	</ul>
  		</div>
	</nav>
    <div id='title'>
    
    <div class="row" id="row-1">
    <center>
    	<div class="col-md-10">

         	<div class="row" style="margin-top: -150px;" > 
                <?php
                foreach ($mentor as $key):                 
        
                ?>
    			<div class="col-sm-2" style="margin-top: 85px;">
				<img class="card-img-top" src="<?php echo base_url('asset/mentor/'.$key['photo']); ?>" style="padding-top: 15px;">

                <div class="caption" style="margin-top: 2px;">
                <h6><?php echo $key['name'] ?></h6>
                <h6><?php echo $key['jabatan'] ?></h6>
                </div>

                </div> 
         
                 				
                <?php 
                    endforeach;
                ?> 
    		</div>
    		<br>
           
    		
  		</div>
  		</center>
  	</div>
 <div class="footer">
            <p>Copyright 2018 AYODEV Studio. All rights reserved</p>
            </div
        	
        </span>
    </div>

</body>

</html>
