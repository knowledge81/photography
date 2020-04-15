<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Photography</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/x-icon" href="images/camera.ico">

        <link href="https://fonts.googleapis.com/css?family=Bellota&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/style.css">
    </head>
  <body>
    <nav>
        <div class="navbar" style="font-family: 'Bellota', cursive">
        <a href="index.php"><img src="images/camera.png" alt="camera" style="height:30px; width:30px;"></a>
            <?php
                if ($home == 'home') {
                    echo '<a href="index.php" class="nav-links active">Home</a>';
                    } else {
                    echo '<a href="index.php" class="nav-links">Home</a>';
                }
            ?>  
            <?php
                if ($about == 'about') {
                    echo '<a href="about.php" class="nav-links active">About</a>';
                    } else {
                    echo '<a href="about.php" class="nav-links">About</a>';
                }
            ?>  
            <?php
                if ($gallery == 'gallery') {
                    echo '<a href="gallery.php" class="nav-links active">Gallery</a>';
                    } else {
                    echo '<a href="gallery.php" class="nav-links">Gallery</a>';
                }
            ?>  
            <?php
                if ($contact == 'contact') {
                    echo '<a href="contact.php" class="nav-links active">Contact</a>';
                    } else {
                    echo '<a href="contact.php" class="nav-links">Contact</a>';
                }
            ?>  
        <div>
    </nav>
        
    