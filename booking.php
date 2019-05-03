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
<?php
include("header.php");
?>

<div class="booking">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 offset-2 offset-lg-3 center">  
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
                        <select class="icons">
                            <option value="" disabled selected>Choose your Course</option>
                            <option value="" data-icon="image/master.png">Cyber Security</option>
                            <option value="" data-icon="image/paypal.jpg">Hacking</option>
                            <option value="" data-icon="image/visa.png">Networking</option>
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
                    <input type="submit" name="submit" value="submit" class="btn"> 
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
        $('select').formSelect();
    })   
</script>
</body>
</html>