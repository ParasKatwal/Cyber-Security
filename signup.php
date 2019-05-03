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

    <title>SIGN UP</title>
</head>
<body>
<?php
include("header.php");
?>

<div class="signup">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 offset-2 offset-lg-3 center">  
                <form method="post" action="signup.php">
                    <?php include('errors.php'); ?>
                    <img src="image/logo.jpg" alt=""  class="responsive-img ">
                    <div class="input-field"> 
                        <i class="material-icons prefix white-text">account_circle</i>
                        <input type="text" name="username" value="<?php echo $username; ?>" style="color: white;">
                        <label for="text">User Name</label>
                    </div>
                    <div class="input-field"> 
                        <i class="material-icons prefix white-text">email</i>
                        <input type="email" name="email" value="<?php echo $email; ?>" id="email" style="color: white;">
                        <label for="email">Email Address</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix white-text">vpn_key</i>
                        <input id="password" type="password" name="password_1" style="color: white;">
                        <label for="password">Your password</label>
                    </div>
                    <div class="input-field">
                        <i class="material-icons prefix white-text">vpn_key</i>
                        <input id="password" type="password" name="password_2" style="color: white;">
                        <label for="password">Confirm Password</label>
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
                    <input type="submit" name="reg_user" value="SIGN UP" class="btn"> 
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