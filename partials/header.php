<?php
include('inc/config.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Stránka o špecifikácií SoC">
    <meta name="keywords" content="SoC, system on a chip, systém na čipe">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>SoC</title>
</head>
<body class="custom-body-color">
    <header>
      <!--navigácia-->
      <nav class="navbar navbar-expand-sm navbar-dark fixed-top custom-background">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="img/cpu-gc253e2714_1280.png" alt="logo" width="28" height="28" class="d-inline-block align-text-top">
            <span class="custom-navbar-top-color">SoCInfo</span></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
            <?php
                
                print_menu($Header_menu);
            ?>
            
            </ul>
          </div>
        </div>
      </nav>


    </header>