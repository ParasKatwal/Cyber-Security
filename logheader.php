<?php include('server.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" type="image/png" href="image/logo.JPG">
    <link rel="stylesheet" href="/css/responsive.css" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Document</title>
</head>
<body>

<nav>
    <div class="nav-wrapper black">
        <a href="#" class="sidenav-trigger" data-target="mobile-links"><i class="material-icons">menu</i></a>
        <?php  if (isset($_SESSION['username'])) : ?>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="logged.php">HOME</a></li>
            <li><a href="logbooking.php">BOOKING</a></li>
            <li><a href="logapproach.php">TRAINING</a></li>
            <li><a href="loglocation.php">LOCATION</a></li>
            <li><a href="index.php?logout='1'" >LOGOUT</a></li>
            <li>
                <?php  if (isset($_SESSION['username'])) : ?>
                <?php endif ?>
            </li>
        </ul>
        <?php endif ?>

        <ul class="sidenav" id="mobile-links">
        <li><a href="booking.php">BOOKING</a></li>
            <li><a href="approach.php">TRAINING</a></li>
            <li><a href="location.php">LOCATION</a></li>
            <li><a href="index.php?logout='1'" >LOGOUT</a></li>
            <li>
                <?php  if (isset($_SESSION['username'])) : ?>
                <?php endif ?>
            </li>
        </ul>

    </div>
</nav>


<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

 
<script>
    $(document).ready(function() {
        $('.sidenav').sidenav();
        $('.dropdown-trigger').dropdown();
    })   
</script>
</body>
</html>