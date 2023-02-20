<?php
    include_once "../modules/main-module.php";
?>
<!DOCTYPE html>
<html lang="en" style="overflow-x: hidden; margin:0px; padding:0px; height:100%; width:100%;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='../CSS/styles.css'/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body style="margin:0px; padding:0px;">
    <header style="padding:0px; margin: 0px;">
        <nav class="navbar navbar-dark" style="background-color: #1EBBD7; height:15vh; margin: 0px; padding: 0px;">
            <div class="container-fluid" stye="width:100%;">
                <div class="nav-item">
                    <a class="nav-link" href='./index.php'><img src='../Soap Image Assets\logo-color-crop.png' alt="Logo" id='logo' class="navbar-brand" style="width:130px; height: auto;"/></a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href='./about.php' style="color: #FFFFFF;">About</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href='./soaps.php' style="color: #FFFFFF">Soaps</a>
                </div>
                <div class="nav-item">
                    <a class="nav-link" href='./login.php' style="color: #FFFFFF"><?php show_login_text(); ?></a>
                </div>
                <div class="nav-item">
                <a class="nav-link" href='./cart.php' style="color: #FFFFFF"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM3.102 4l1.313 7h8.17l1.313-7H3.102zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg></a>
                </div>
            </div>
        </nav>
    </header>