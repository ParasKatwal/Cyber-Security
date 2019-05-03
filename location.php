<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="image/logo.JPG">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/responsive.css" media="screen and (max-width: 1024px)">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>LOCATION</title>
</head>
<body>
<?php
include("header.php");
?>

<div class="location">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-4 my-wrapper valign-wrapper center-align ">
                <h1>Meet Us Here!</h1>
            </div>
            <div class="col-sm-12 col-lg-8 map1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d28250.631484238358!2d85.34624914175441!3d27.737998632012044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1be5bea00987%3A0x70cf02a942554e97!2sKapan%2C+44600!5e0!3m2!1sen!2snp!4v1555692903610!5m2!1sen!2snp" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

            <div class="col-sm-12 center">
                <br><br><br>
                <h1>Book here!</h1>
            </div>
            <div class="col-sm-12 book">
                <form action="">
                    <div class="input-field">
                        <select class="icons">
                            <option value="" disabled selected>Choose your Card</option>
                            <option value="" data-icon="image/master.png">Master Card</option>
                            <option value="" data-icon="image/paypal.jpg">Paypal</option>
                            <option value="" data-icon="image/visa.png">VISA</option>
                        </select>
                    </div>
                    <div class="input-field"> 
                        <i class="material-icons prefix white-text">credit_card</i>
                        <input type="text" id="user" style="color: white;">
                        <label for="text">Your Card number</label>
                    </div>
                    <div class="input-field"> 
                        <i class="material-icons prefix white-text">account_box</i>
                        <input type="text" id="text" style="color: white;">
                        <label for="text">Card Owner</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix white-text">date_range</i>
                        <input id="password" type="password"  style="color: white;">
                        <label for="password">Expires date</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix white-text">date_range</i>
                        <input id="password" type="password" style="color: white;">
                        <label for="password">CVC</label>
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
                    <input type="submit" name="submit" value="Book" class="btn"> 
                    </div>
                </form>
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

 
<script>
    $(document).ready(function() {
       
    })   
</script>
</body>
</html>