<?php
require_once('connect.php');
session_start();

if(isset($_POST['submit'])){
    $email=$_POST['useremail'];
    $pass=$_POST['password'];
    $repass=$_POST['repassword'];
    if($pass!=$repass){

        echo"<script>alert('password doesnt match');</script>";
        exit();
    }
    $sql="insert into accounts values('".$email."','".$pass."')";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo "<script>alert('email already exists');</script>";//mysqli_error($conn);
    }
    else{
        header("Location:login.php");
    
    }

}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>foodmenu</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/A-Blog-Page.css">
    <link rel="stylesheet" href="assets/css/Fern-Login-Form.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/Header-Dark.css">
    <link rel="stylesheet" href="assets/css/Pretty-Header.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search-1.css">
    <link rel="stylesheet" href="assets/css/Table-With-Search.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md custom-header">
        <div class="container-fluid" id="bgcolor">
            <div><a class="navbar-brand" href="login.php">AJIET Boys Hostel-Mess management</a><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
        </div>
    </nav>
    <div class="login-card"><img class="profile-img-card" src="assets/img/avatar_2x.png">
        <p class="profile-name-card"> </p>
        <form class="form-signin" id="form1" action="signup.php" method="post">
            <span class="reauth-email"> </span>
            <input class="form-control" type="email" name="useremail" id="inputEmail" required="" placeholder="Email address">
            <input class="form-control" type="password" id="inputPassword" required="" name="password" placeholder="Password">
            <input class="form-control" type="password" id="inputPassword-1" required="" name="repassword" placeholder="Confirm Password">
             <button class="btn btn-primary btn-block btn-lg btn-signin" name="submit" form="form1" type="submit">Sign up</button><a class="forgot-password" href="login.php">Already have account?</a></form></div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <p class="copyright">Fayez,Devan & Amal © 2021</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>