<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="shortcut icon" type="image/png" href="image/logo.JPG">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link rel="stylesheet" href="/css/responsive.css" media="screen and (max-width: 1024px)">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
    <title>HOME</title>
</head>
<body>
<?php
include("header.php");
?>

<div class="intro">
    <div class="container">
        <div class="row">
            <div class="about col-lg-8 white-text">
                <h1>Curious CyberSecurity</h1>
                <p>Curious Cybersecurity are a research-based company founded in 2016, created by John and Steven Yung. Their ambition is to research and help companies with the human elements of cybersecurity with a view to developing anti-phishing filtering solutions.</p>
            </div>
        </div>
    </div>
</div>

<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-5 center">
                <h1>GET STARTED</h1>
                <img src="image/logo.jpg" class="circle responsive-img" alt="">
            </div>
            <div class="col-sm-12 col-lg-5 offset-lg-2 center">
                <form method="post" action="signin.php">
                    <div class="input-field"> 
                        <i class="material-icons prefix">email</i>
                        <input type="text" name="username" id="email" class="validate">
                        <label for="email">User name</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix">vpn_key</i>
                        <input id="password" type="password" name="password" class="validate">
                        <label for="password">Your password</label>
                    </div>
                    <div class="">
                        <p>
                            <label>
                                <input type="checkbox" />
                                <span>I have read and agree to the Terms and Conditions and Privacy Policy</span>
                            </label>
                        </p>
                    </div>
                    <div class="input-field center">
                    <input type="submit" name="login_user" value="submit" class="btn"> 
                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<div class="slider">
    <ul class="slides">
      <li>
        <img src="image/s1.jpg " class="responsive-img" >
      </li>
      <li>
        <img src="image/s2.jpg" class="responsive-img" > 
      </li>
      <li>
        <img src="image/s3.jpg" class="responsive-img" > 
      </li>
    </ul>
</div>

<div class="logo">
</div>
<div class="smlogo">
</div>

<div class="content grey darken-4">
    <div class="container section" id="photos">
        <div class="row white-text my-wrapper valign-wrapper center-align">
            <div class="col-sm-12 col-lg-4 ">
                <img src="image/news.jpg" alt="" class="responsive-img materialboxed">
                <h3 class="center">News</h3>
            </div>
            <div class="col-sm-12 col-lg-4">
                <img src="image/awards.png" alt="" class="responsive-img materialboxed">
                <h3 class="center">Awards</h3>
            </div>
            <div class="col-sm-12 col-lg-4">
                <img src="image/press.jpg" alt="" class="responsive-img materialboxed">
                <h3 class="center">Press Release</h3>
            </div>
        </div>
    </div>
</div>

<?php
include("footer.php");
?>

<script src="https://code.jquery.com/jquery-3.4.0.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.css" />
<script src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/3.1.0/cookieconsent.min.js"></script>
<script>
window.addEventListener("load", function(){
window.cookieconsent.initialise({
  "palette": {
    "popup": {
      "background": "#383b75"
    },
    "button": {
      "background": "#f1d600"
    }
  },
  "theme": "classic",
  "position": "top"
})});
</script>

 
<script>

    $(document).ready(function() {
        $('.sidenav').sidenav();
        $('.materialboxed').materialbox();
        $('.slider').slider();
        $('.parallax').parallax();
        $('.dropdown-trigger').dropdown();
    });

</script>
</body>
</html>