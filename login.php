<?php
//membuat koneksi ke database
require 'function.php';

// $conn = mysqli_connect("localhost", "root", "", "mining");
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    //  cari data base
    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");

    $hitung = mysqli_num_rows($cekdatabase);

    if ($hitung > 0) {
        // echo 'data ada';
        $_SESSION['log'] = 'True';
        header('location:index.php');
    } else {
        header('location:login.php');
        // echo 'tidak ada email terdaftar! silahkan';
    };
};



if (!isset($_SESSION['log'])) {
} else {
    header('location:index.php');
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- App css -->
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" id="light-style" />
    <link href="assets/css/app-dark.min.css" rel="stylesheet" type="text/css" id="dark-style" />

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/bd44bb9b8e.js" crossorigin="anonymous"></script>

</head>

<body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
    <div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xxl-4 col-lg-5">
                    <div class="card">

                        <!-- 
                            
        
                         -->
                        <!-- <div class="card-header pt-4 pb-4 text-center bg-primary"> -->
                        <div class="card-header pt-0 pb-0 text-center bg-dark">

                            <a href="index.html">
                                <span><img src="assets/images/raveos.png" alt="" height="15%"></span>
                            </a>
                        </div>

                        <div class="card-body p-4">

                            <!-- <div class="text-center w-75 m-auto">
                                <h4 class="text-dark-50 text-center pb-0 fw-bold">Sign In</h4>
                                <p class="text-muted mb-4">Enter your email address and password to access admin panel.</p>
                            </div> -->

                            <form method="post">

                                <div class="mb-3">
                                    <label for="emailaddress" class="form-label"> Email address</label>
                                    <!-- <i class="fa-solid fa-circle-user"></i> -->
                                    <input class="form-control" type="email" name="email" id="emailaddress" required="" placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <!-- <a href="pages-recoverpw.html" class="text-muted float-end"><small>Forgot your password?</small></a> -->
                                    <label for="password" class="form-label">Password</label>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password">
                                        <div class="input-group-text" data-password="false">
                                            <span class="password-eye"></span>
                                        </div>
                                    </div>
                                </div>
                                <!-- 
                                <div class="mb-3 mb-3">
                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                        <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                    </div>
                                </div> -->

                                <div class="mb-3 mb-0 text-center">
                                    <button class="btn btn-primary" type="submit" name="login"> <i class="fa-solid fa-right-to-bracket"></i> Sign In </button>
                                </div>
                                <script type=”text/javascript”>
                                </script>
                            </form>
                        </div> <!-- end card-body -->
                    </div>


                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->

    <!-- <footer class="footer footer-alt">
        2018 - 2021 © Hyper - Coderthemes.com
    </footer> -->

    <!-- bundle -->

    <script src="assets/js/vendor.min.js"></script>
    <script src="assets/js/app.min.js"></script>



</body>

</html>