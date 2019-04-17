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

    <title><?= $page_title ?></title>
</head>
<body>

    <!-- Always shows a header, even in smaller screens. -->
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
        <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Dashboard</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
        <a class="mdl-navigation__link" href="">Products</a>
        <a class="mdl-navigation__link" href="">Buyers</a>
        <a class="mdl-navigation__link" href="">Sales</a>
        <a class="mdl-navigation__link" href="">Inquaries</a>
        <a class="mdl-navigation__link " href="<?= site_url('Admin') ?>">Administrator</a>
        <a class="mdl-navigation__link " href=""><div class="material-icons mdl-badge mdl-badge--overlap" data-badge="1">account_box</div>
</a>

        
            <!-- <a class="mdl-navigation__link" href="">Link</a> -->
        <a id="user" class="user-block mdl-js-button">
            <div>
                <img src="<?php echo base_url(); ?>Images_Icons/user.png" alt="User Icon" class="header-icon left">
                <p class="name-tag-center" clickable >John Doe</p>
            </div>
        </a>
        <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect" for="user">
            <a href="<?php echo site_url('Admin/viewProfile') ?>" class="user-menu-list-item"><li class="mdl-menu__item" >Profile</li></a>
            <a href="<?php echo site_url('Admin/editProfile/'.'72'); ?>"><li class="mdl-menu__item mdl-menu__item--full-bleed-divider">Edit</li></a>
            <!-- <li disabled class="mdl-menu__item">Disabled Action</li> -->
            
            <li class="mdl-menu__item">Logout</li>
        </ul>

        </nav>
        </div>
    </header>
    <div class="mdl-layout__drawer">
        <span class="">
            <div class="side-menu-user">
                <img src="<?php echo base_url(); ?>Images_Icons/user.png" alt="User Icon" class="side-menu-user-icon center">
                <p class="name-tag-center-bold">John Doe</p>
                <p class="position-tag-center">System Admin</p>
                
            </div>
            <hr class="divider">
            
        </span>
        <nav class="mdl-navigation">
        <a class="mdl-navigation__link" href="">Products</a>
        <a class="mdl-navigation__link" href="">Buyers</a>
        <a class="mdl-navigation__link" href="">Sales</a>
        <a class="mdl-navigation__link" href="">Inquaries</a>
        <a class="mdl-navigation__link" href="<?= site_url('Admin') ?>">Administrator</a>
        
        </nav>
    </div>
    
    
    </div>
    
