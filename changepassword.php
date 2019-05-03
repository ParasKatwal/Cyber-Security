<?php
session_start();
include('server.php');

if ($_POST['submit']) {

  $oldpassword = $_POST['oldpassword'];
  $newpassword = $_POST['newpassword'];

  $queryget = mysqli_query("SELECT password FROM register WHERE email=$email") or die("dead");
  $row = mysqli_fetch_assoc($queryget);

  $oldpassword = $row['password'];

  if ($oldpassword==$oldpassword) {

      echo "sucess";

  } else {
    die("old password doesnt match");
  }


}


 ?>
