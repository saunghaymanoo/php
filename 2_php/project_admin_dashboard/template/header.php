<?php require_once "core/base.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/app.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/feather-icons-web/feather.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/assets/css/style.css">
</head>
<body>

    <section class="main container-fluid">
        <div class="row">
    <!-- Side Bar Start -->
           <?php
            include "template/sidebar.php";
           ?>
    <!-- Side Bar End -->
            <div class="col-12 col-lg-9 col-xl-10 vh-100 py-3 content">

                <div class="row header mb-4">
                    <div class="col-12">
                        <div class="p-2 bg-primary rounded d-flex justify-content-between align-items-center">
                            <button class="btn btn-primary show-sidebar-btn d-block d-lg-none">
                                <i class="feather-menu text-light" style="font-size: 2em;"></i>
                            </button>

                            <form class="d-none d-md-block" action="" method="POST">
                                <div class="form-inline">
                                    <input type="text" class="form-control">
                                    <button class="btn btn-light">
                                       <i class="feather-search"></i>
                                    </button>
                                </div>
                            </form>
                            <div class="dropdown d-block">
                                <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="<?php echo $url; ?>/assets/img/user/avatar1.jpg" class="user-img shadow-sm">Saung Hayman Oo
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                  <a class="dropdown-item" href="#">Action</a>
                                  <a class="dropdown-item" href="#">Another action</a>
                                  <div class="dropdown-divider"></div>
                                  <a class="dropdown-item" href="#">Logout</a>
                                </div>
                              </div>

                        </div>
                    </div>
                   
                </div>