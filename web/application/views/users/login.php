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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/css/style_login.css">

    <style rel="stylesheet" >
        #title {
            position: absolute;
            top: 0%;
            left: 0;
            right: 0;
            color: #FFF;
            text-align: center;
            font-family: "lato", sans-serif;
            font-weight: 300;
            font-size: 50px;
            letter-spacing: 10px;
            margin-top: -60px;
            padding-left: 10px;
        }

        #title span {
            background: -webkit-linear-gradient(white, #38495a);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
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
   
<div class="login-page" style="margin-top: -50px;">
    <div class="form">
        <img src="<?php echo base_url(); ?>asset/logo.png" width="200">
        
<form class="login-form"  method="POST" action="<?php echo base_url()?>User/authentication" >

    
    <label for="nim"><b>NIM</b></label> <br>
    <input type="text" id="nim" name="nim" required >
    <br>
    <label for="password"><b>PASSWORD</b></label> <br>
    <input type="password" id="password" name="password" required minlength="6" maxlength="100">
    <br>
    

    <?php if ($this->session->userdata('message') == "invalid" ) :?>
        <p><?php 
        $message = "nim or password is invalid";
        echo $message;

        ?></p>
    <?php endif; ?>
   

    
	<button><b>LOG IN</b></button>

    

</form>

    </div>
</div>
</span>

 <div class="footer">
            <p>Copyright 2018 AYODEV Studio. All rights reserved</p>
            </div
            
      
    </div>


</body>

</html>