<?php
defined('BASEPATH') OR exit('No direct script access allowed');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>AYO DEV</title>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
    <link href='https://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/module.css">
</head>

<body>

    <div id='stars' style="margin-top: -8px;"></div>
    <div id='stars2'></div>
    <div id='stars3'></div>
    <nav class="navbar navbar-expand-lg navbar-light" >
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

    <div id='title' >
    <center>
    <!-- <div class="card w-75" > -->
    <div class="card-body" >

         <?php
    // include('configg.php');
    //     $data = mysqli_query($kon, "select * from download ORDER BY id DESC");
        $no = 1;
        // while($row = $data->fetch_assoc())
        foreach ($download as $row) {
  echo '
  <center>
  
    <div class="card bg-light mb-3" style="width: 45rem;  opacity: 0.95">
        <div class="card-body">
            <h5 class="card-title" style="text-align: left;">'.$row['nama_file'].'</h5>
            <p align="left" style="font-size:11px;">'.$row['tanggal_upload'].'</p>

            <div class="card-text" style="text-align: left; font-size: 10px; max-width: 43rem;">
                <div class="col-12">
                    <div class="row">
                      <div class="col-2">
                      </div>
                            <div class="col-10">
                                
                                    
                                        
                                            <div class="card-text" style="text-align: left; max-width: 33rem;">
                                                <div class="shadow-sm p-3 mb-2 bg-white rounded">
                                                    <div class="col-12">
                                                        <div class="row">
                                                            <div class="col-2 border " >
                                                                <a href="'.$row['file'].'"><center><img class=mt-2  src="icon/folder.png" ><center></a>
                                                            </div>
                                                            <div class="col-10">
                                                                <p ><center class="text-black-50" style="text-align: left;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa.  </center></p>
                                                            </div>
                                                        </div>
                                                    </div>
                            
                                                </div>
                                    
                                            </div>
                                        
                                    
                                
                            </div>
                    </div>
                </div>
                
                
                
            </div>
            
            
        </div>
        
    </div>
    </center>';
    $no++;

}
?>
    </div>
<!-- </div> -->
</center>
   
			
     <center>
     
            <div class="footer">
            <p>Copyright 2018 AYODEV Studio. All rights reserved</p>
            </div
            
     </center>

        </span>
    </div>

</body>

</html>
