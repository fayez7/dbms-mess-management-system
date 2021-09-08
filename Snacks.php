<?php
require_once('connect.php');
session_start();
$_SESSION['cat']="snacks";
if(!isset($_SESSION['username'])){
    header("Location:login.php");

}

   
    $sql="select * from snacks ";
    $result=mysqli_query($conn,$sql);
    if(!$result){
        echo mysqli_error($conn);
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
        <div class="container-fluid">
            <div><a class="navbar-brand" href="home.php">AJIET Boys Hostel-Mess management</a><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button></div>
        </div>
    </nav>
    <div style="background-color: #454d58;height: 670px;">
        <div class="col-md-12 search-table-col" style="height: 450px;"><span class="counter pull-right"></span>
            <div class="table-responsive table-bordered table table-hover table-bordered results">
                <table class="table table-bordered table-hover">
                    <thead class="bill-header cs">
                        <tr>
                            <font color=ff0000>
                            <th id="trs-hd" class="col-lg-1" style=" width: 0;">Week</th>
                            <th id="trs-hd-2" class="col-lg-1" style=" width: 0;">Main Dish</th>
                            <th id="trs-hd-2" class="col-lg-1" style=" width: 0;">Curry</th>
							<th id="trs-hd-2" class="col-lg-1" style=" width: 0;">Side Dish</th>
                            <th id="trs-hd" class="col-lg-2" style="width: 0;">Action</th>
                        </font>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="warning no-result">
                            <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                        </tr>
                        <?php
                         if(mysqli_num_rows($result)>0){
        while($row=mysqli_fetch_assoc($result)){
            echo" <tr style='color:white'>
                            <td>".$row['week']."</td>
                            <td>".$row['main dish']."</td>
                            <td>".$row['curry']."</td>
                            <td>".$row['side dish']."</td>
                            
                            <td><button class='btn btn-success' onclick='edit(".$row['week'].")' style='margin-left: 5px;' type='submit'><i class='fa fa-edit' style='font-size: 15px;'></i></button><button class='btn btn-danger' style='margin-left: 5px;' onclick='deleterow(".$row['week'].")' type='submit'><i class='fa fa-trash' style='font-size: 15px;'></i></button></td>
                        </tr>";
        }}
    
    else{
        echo"<tr><td colspan='12'><h3>no data found</h3></td></tr>";
    }


?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center align-items-center"><a class="btn btn-primary" role="button" style="background-color: #1eb53a;font-size: 20px;color: rgb(255,255,255);" href="add.php">ADD</a></div>

    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="#"><i class="icon ion-social-instagram"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-facebook"></i></a></div>
            <p class="copyright">Fayez,Devan & Amal © 2021</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript">
        function edit(week){
           location.href="edit.php?week="+week;

        }
        function deleterow(week){
           location.href="delete.php?week="+week;

        }

    </script>
    <script src="assets/js/Table-With-Search.js"></script>
</body>

</html>