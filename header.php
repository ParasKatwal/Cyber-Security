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
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="index.php">HOME</a></li>
            <li><a href="service.php">SERVICE</a></li>
            <li><a href="#" class='dropdown-trigger' href='#' data-target='dropdown1'>CONTACT US <i class="fas fa-sort-down"></i></a>
                <ul id='dropdown1' class='dropdown-content'>
                    <li><a href="signin.php">SIGN IN</a></li>
                    <li><a href="signup.php">SIGN UP</a></li>
                    <li><a href="booking.php">BOOKING</a></li>
                </ul>
            </li>
            <li><a href="#" class='dropdown-trigger' href='#' data-target='dropdown2'>OUR APPROACH <i class="fas fa-sort-down"></i></a>
                <ul id='dropdown2' class='dropdown-content'>
                    <li><a href="approach.php">Training</a></li>
                </ul>
            </li>
            <li><a href="location.php">LOCATION</a></li>
        </ul>

        <ul class="sidenav" id="mobile-links">
            <li><a href="#">HOME</a></li>
            <li><a href="#">SERVICE</a></li>
            <li><a href="#">CONTACT US</a></li>
            <li><a href="#">OUR APPROACH</a></li>
            <li><a href="#">LOCATION</a></li>
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