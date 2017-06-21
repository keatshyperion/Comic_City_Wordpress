<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<title><?php bloginfo('name');?> <?php wp_title('|', true,'left' );?></title>

    <meta charset="utf-8">
  
   
    
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontello.css">
     <link rel="stylesheet" href="css/hamburgers-master/dist/hamburgers.css">
     <link rel="stylesheet" href="style.css">

    <!--FAVICON START-->
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo IMAGES;?>images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo IMAGES;?>favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo IMAGES;?>favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo IMAGES;?>favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo IMAGES;?>favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo IMAGES;?>favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo IMAGES;?>favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo IMAGES;?>favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo IMAGES;?>favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="<?php echo IMAGES;?>favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo IMAGES;?>favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo IMAGES;?>favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo IMAGES;?>favicon/favicon-16x16.png">
    <link rel="manifest" href="<?php echo IMAGES;?>favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo IMAGES;?>favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500&amp;subset=latin-ext" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800,900&amp;subset=latin-ext" rel="stylesheet">
    


    <!--FAVICON END-->

    <style type="text/css">
         ::-webkit-scrollbar {
            width: 9px;
            height: 9px;
        }
        
         ::-webkit-scrollbar-button {
            width: 0px;
            height: 0px;
        }
        
         ::-webkit-scrollbar-thumb {
            background: #e1e1e1;
            border: 0px none #ffffff;
            border-radius: 50px;
        }
        
         ::-webkit-scrollbar-thumb:hover {
            background: #ffffff;
        }
        
         ::-webkit-scrollbar-thumb:active {
            background: #353939;
        }
        
         ::-webkit-scrollbar-track {
            background: #666666;
            border: 0px none #ffffff;
            border-radius: 50px;
        }
        
         ::-webkit-scrollbar-track:hover {
            background: #666666;
        }
        
         ::-webkit-scrollbar-track:active {
            background: #6e6e6e;
        }
        
         ::-webkit-scrollbar-corner {
            background: transparent;
        }
    </style>
 <?php wp_head();?>
</head>

<body <?php body_class();?>>
    <div class="container-fluid">
        <div class="row">

            <nav class="navbar navbar-toggleable-md navbar-light bg-faded nawigacja">
                <button class="hamburger hamburger--3dx
 navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="hamburger-box">
<span class="hamburger-inner"> </span>
      </span>
    </button>
                <a class="navbar-brand" href="#">
                    <img src="images/logo.png" alt="">
                </a>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-item nav-link active" href="index.html">Home <span class="sr-only">(current)</span></a>
                        <a class="nav-item nav-link" href="shop.html">Shop</a>
                        <a class="nav-item nav-link" href="page.html">Blog</a>
                        <a class="nav-item nav-link" href="aboutUs.html">About us</a>
                        <a class="nav-item nav-link" href="login.html">Login</a>
                        <a class="nav-item nav-link" href="register.html">Join</a>

                    </div>
                </div>
            </nav>
        </div>
        <div class="start col-lg-12">
            <a href="#">
                <div class="joinIn"></div>
            </a>
            <img src="images/overlay.png" class="overlay" alt="">
        </div>