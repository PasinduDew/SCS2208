<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Getmdl.com Material Design CDN -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!-- <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css"> -->
    <!-- <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script> -->

    <link rel="stylesheet" href="<?= base_url()?>CSS/material.css">
    <script defer src="<?= base_url()?>JS/material.min.js"></script>

    <!-- Matrialize CSS -->
    <!-- <link rel="stylesheet" href="<?= base_url()?>CSS/materialize.css">
    <script defer src="<?= base_url()?>JS/materialize.min.js"></script> -->

    <!-- My Style Sheet for Custome CSS Styles -->
    <link rel="stylesheet" href="<?= base_url()?>CSS/style.css">

    <!-- My Custom JavaScripts File -->
    <script src="<?= base_url()?>JS/myscripts.js"></script>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <style>
        
    </style>


    <title>V Orchid</title>
</head>
<body>

    <div class="pimg1">
        <header class="mdl-layout__header mdl-layout__header--transparent" style="position: fixed;">
            <div class="mdl-layout__header-row " style="padding-top:10px;">
                
            <!-- Title -->
            <span class="mdl-layout-title">V Orchid</span>
            <!-- Add spacer, to align navigation to the right -->
            <div class="mdl-layout-spacer"></div>
            <!-- <div style="width: 200px;"></div> -->
            <!-- Navigation -->
            
            <nav class="mdl-navigation" style="">

           
                <a class="mdl-navigation__link" href="">Flowers</a>
                <a class="mdl-navigation__link" href="">Plants</a>
                <a class="mdl-navigation__link" href="">Orders</a>
                <a class="mdl-navigation__link" href="">Special</a>
                <a class="mdl-navigation__link" href="">Contact Us</a>
                <a class="mdl-navigation__link" href="">About Us</a>
                <!-- <div style="width: 200px;"></div> -->
                 
                <div class="user-wrap">
                    
                    <div class="user-content">
                        <!-- <div class="divider"></div> -->
                        
                        <p id="user-greet">Ayubowan, Guest</p>
                        
                        <a class="mdl-navigation__link" href="" id="btnSignup" style="display: inline;"><img src="<?= base_url()?>/Images_Icons/user.png" alt="Avatar" class="user-avatar"></a>
                        
                        <button id="demo-menu-lower-right" class="mdl-button mdl-js-button mdl-button--icon">
                            <i class="material-icons">more_vert</i>
                        </button>

                        <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-right">
                        
                            <li class="mdl-menu__item "><a class="" href="" style="display: inline;">Log in</a></li>
                            <li class="mdl-menu__item mdl-menu__item--full-bleed-divider" ><a class="" href="" id="btnSignup" style="display: inline;">Sign up</a></li>
                            <li disabled class="mdl-menu__item">Profile</li>
                            <li class="mdl-menu__item">Yet Another Action</li>
                        </ul>

                    </div>

                </div>
                
                
            </nav>
            </div>
        </header>
    <div class="mdl-layout__drawer">
        <span class="mdl-layout-title">Title</span>
        <nav class="mdl-navigation">

                <a class="mdl-navigation__link" href="">Flowers</a>
                <a class="mdl-navigation__link" href="">Plants</a>
                <a class="mdl-navigation__link" href="">Orders</a>
                <a class="mdl-navigation__link" href="">Special</a>
                <a class="mdl-navigation__link" href="">Contact Us</a>
                <a class="mdl-navigation__link" href="">About Us</a>
                <!-- <div style="width: 200px;"></div> -->
                <a class="mdl-navigation__link" href="">Log in</a>
                <a class="mdl-navigation__link" href="">Sign up</a>
        </nav>
    </div>
  <main class="mdl-layout__content">
  </main>
</div>
    
