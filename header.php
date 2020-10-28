<?php
$appVersion = "1.1.2";

$pagename = strtolower(basename($_SERVER['PHP_SELF']));

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=0">
   
    <title>The Piano Man</title>
    <meta name="description" content="">
    <meta name="keywords" content="">

    <meta name="theme-color" content="#080942">
    <meta name="msapplication-navbutton-color" content="#080942">
    <meta name="apple-mobile-web-app-status-bar-style" content="#080942">
    <link rel="shortcut icon" type="image/png" href="favicon.png">
    <link href="https://fonts.googleapis.com/css2?family=Frank+Ruhl+Libre:wght@300;400;500;700&display=swap" rel="stylesheet">

    <link href="css-tpm/app.css?v=<?php echo $appVersion ?>" rel="stylesheet">
    
    <script> </script>

    <style>
        
    </style>
</head>

<body>
    <!--[if lte IE 11]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    
    <main class="wrapper clearfix">
       <!-- header start -->
        <header class="header-main clearfix">
              <div class="container-fluid px-0">
                    <div class="row no-gutters">
                         <div class="col-auto">
                            <div class="logo-outer text-center">
                                <a href="./" class="logo">
                                    <img src="images-tpm/logo.jpg" alt="The Piano Man">
                                </a>
                            </div>
                         </div>
                         <div class="col">
                            <div class="h-100  d-xl-none d-flex justify-content-end align-items-center">
                                <a href="javascript:void(0)" class="hm">
                                    <div class="hamburger">
                                        <span></span>
                                        <span></span>
                                    </div>
                                </a>
                            </div>
                            <nav class="main-nav">
                                <a class="signin-mobile d-xl-none" data-fancybox data-src="#signin" href="javascript:;">Sign In</a>
                                <ul class="nav">
                                    <li class="accent1"><a href="./">Tickets</a></li>
                                    <li class="accent2"><a href="membership.php">Membership</a></li>
                                    <li class="accent3"><a href="support.php">Support</a></li>
                                </ul>
                            </nav>
                         </div>
                         <div class="col-auto">
                            <div class="login-nav">
                                <ul class="nav">
                                    <li class="d-none d-xl-block"><a data-fancybox data-src="#signin" href="javascript:;">Sign In</a></li>
                                    <li><a data-fancybox data-src="#search" href="javascript:;" data-options='{"smallBtn":false}' class="btn btn-search btn-warning"><span class="icon-search"></span></a></li>
                                </ul>
                            </div>
                         </div>
                    </div>
              </div>                  
        </header>     
        <!-- header End -->  

      

