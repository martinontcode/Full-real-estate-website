<?php if(!isset($_SESSION)) { session_start();} ?>

<!DOCTYPE html>
<html lang="en">
<head> 
    
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="description" content="weRent - Real Estate portal">
    <meta name="keywords" content="Real Estate, rent, appartment">
    <meta name="author" content="Martin Onton">

    <title>weRent - Real Estate portal</title> 
    
    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    
    <!-- Bootstrap files -->
    <script src="assets/js/bootstrap.min.js"></script>
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom .css files -->
    <link href="assets/css/custom.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    
    <!-- Custom font files -->
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
               
    <!-- Custom js files -->
    <script src="assets/js/locations.js"></script> 
    <script src="assets/js/jquery-ui.js"></script>
    
</head><!--/head-->
<body>

    <header id="navigation">
        <!-- Navbar -->
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="container">
                
                    <div class="navbar-header">
                        <!-- Collapse navigation menu for mobiles -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> <!-- /Collapse menu --> 
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.php" >
                            <img alt="logo" src="assets/img/weRent_logo.png">
                        </a> <!--/Logo -->    
                    </div> <!--/navbar-header-->

                    <!-- Navigation links -->
                    <div class="collapse navbar-collapse"> 
                        <ul class="nav navbar-nav navbar-right"> 
                            <li class="scroll activeli"><a href="#navigation">Home</a></li> 
                            <li class="scroll"><a href="#about-us">Properties</a></li> 
                            <li class="scroll"><a href="#services">Services</a></li> 
                            <li class="scroll"><a href="#contact">Contact</a></li> 
                        </ul> <!--/Navigation links -->
                    </div> <!--/navbar-header-->

                </div> <!--/container-->
            </div> <!--/container-fluid-->
            
            <!-- Add active class to link that is active -->
            <script type="text/javascript">
            $(document).ready(function(){
                $('.nav li').click(function(event){
                    //remove all pre-existing active classes
                    $('.activeli').removeClass('activeli');
                    //add the active class to the link we clicked
                    $(this).addClass('activeli');    
                });
            });
            </script>
 
        </nav> <!--/navbar-->     
    </header> <!--/navigation--> 
    <div class="container-fluid center-block" id="header-container" style="background-image: url('assets/img/carousel_background.png')">
        <div class="container" id="header-header">
            <h1 class="text-center">Introducing weRent,</h1>
            <h1 class="text-center"><i>quick way to find your place</i></h1>
        </div>
        <div class="container center-block" id="header-inside">
            <form action="search.php" method="post" id="searchContainer-form">
                <div class="form-group searchContainer-form center-block">
                    <!-- fieldsets -->
                    <fieldset>
                    <h2 class="fs-title">Find apartments for rent</h2>
                    <script type="text/javascript">
                        
                    </script>
                    <input type="text" name="location" placeholder="Location" id="locations" focus required class="form-control"><br>  
                    
                    <input class="btn btn-default btn-sm  action-button center-block" name='ticket' value="Search" type="submit">
                    </fieldset>
                </div>
            </form><!--/searchContainer-form-->
        </div><!--/header-inside-->
    </div><!--/search-container--> 
