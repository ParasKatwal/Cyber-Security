


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

    <title>SIGN IN</title>
</head>
<body>
<?php
include("logheader.php");
?>

<div class="logged">
    <div class="container">
        <div class="row">
           

             <!-- logged in user information -->
            <div class="col-sm-12 col-lg-6 info">
                <?php  if (isset($_SESSION['username'])) : ?>
                    <h1 class="center"><i class="material-icons prefix black-text">face</i> Welcome <strong><?php echo $_SESSION['username']; ?></strong></h1>
                <?php endif ?>
            </div>

            <div class="col-sm-12">
                <h4><a href="#" class="black-text"><i class="material-icons prefix black-text">settings</i>Change password</a></h4>
                <form method="post" action="signin.php">
                    <div class="input-field"> 
                        <input type="password" name="oldpassowrd"  class="validate" style="color: white;">
                        <label for="password">Old password</label>
                    </div>
                    <div class="input-field">
                        <input id="password" type="password" name="newpassword" class="validate"  style="color: white;">
                        <label for="password">New password</label>
                    </div>
                    <div class="input-field center">
                    <input type="submit" name="login_user" value="Change" class="btn"> 
                    </div>
                </form>

            </div>

            <div class="col-sm-12">
                <div class="topic"><h1>Popular Course</h1></div>
                <div class="row">

                    <?php 
                       
                        $db = mysqli_connect('localhost', 'root', '', 'registration');
                        $query = "select * from image_upload";
                        $result = mysqli_query($db, $query);
                    ?>
                    <?php while( $food = mysqli_fetch_assoc($result) ): ?>

                    <div class="col-sm-6 col-lg-4">
                        <div class="card">
                            <div class="card-image">
                            <img src="image/<?php echo $food['imageName']; ?>" alt="">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Cybersecurity and the Internet of Things</span>
                            </div>
                            <div class="card-action">
                                <a href="introduction.pdf" class="waves-effect waves-light btn" download>Download</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile;?>
               

                    <div class="col-sm-6 col-lg-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="image/l4.jpg" alt="">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Palo Alto Networks Cybersecurity</span>
                            </div>
                            <div class="card-action">
                                <a href="introduction.pdf" class="waves-effect waves-light btn" download>Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="image/l5.jpg" alt="">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Homeland Security and Cybersecurity</span>
                            </div>
                            <div class="card-action">
                                <a href="introduction.pdf" class="waves-effect waves-light btn" download>Download</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-4">
                        <div class="card">
                            <div class="card-image">
                                <img src="image/l6.jpg" alt="">
                            </div>
                            <div class="card-content">
                                <span class="card-title">Cybersecurity and the X-Factor</span>
                            </div>
                            <div class="card-action">
                                <a href="introduction.pdf" class="waves-effect waves-light btn" download>Download</a>
                            </div>
                        </div>
                    </div>
                </div>
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