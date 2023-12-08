<?php

  if (!isset($_SESSION['admin_name'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: ../admin/login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['admin_name']);
    header("location: ../admin/login.php");
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        DNX EMPIRE|Admin
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <!-- CSS Files -->
    <link href="assets/css/material-dashboard.css?v=2.1.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="dark-edition">
    <div class="wrapper ">
        <div class="sidebar" data-color="purple" data-background-color="black" data-image="../assets/img/sidebar-2.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo"><a href="index.php" class="simple-text logo-normal">
                    <img src="./assets/img/logo.png" style="width: 150px;">
                </a></div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item active  ">
                        <a class="nav-link" href="index.php">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="addsuppliers.php">
                            <i class="material-icons">person</i>
                            <p>Add supliers</p>
                        </a>
                        
                    </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="manageuser.php">
                            <i class="material-icons">person</i>
                            <p>Manage supliers</p>
                        </a>
                    </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="managecustomer.php">
                            <i class="material-icons">person</i>
                            <p>Manage Customer</p>
                        </a>
                        </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="managecategory.php">
                            <i class="material-icons">person</i>
                            <p>Manage Category</p>
                        </a>
                    </li>
                    </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="addcategory.php">
                            <i class="material-icons">person</i>
                            <p>Add Category</p>
                        </a>
                    </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="addproduct.php">
                            <i class="material-icons">person</i>
                            <p>Add Product</p>
                        </a>
                    </li>
                     <li class="nav-item ">
                        <a class="nav-link" href="adduser.php">
                            <i class="material-icons">person</i>
                            <p>Add Customer</p>
                        </a>
                    </li>
                    <li class="nav-item ">
            <a class="nav-link" href="activity.php">
              <i class="material-icons">timeline</i>
              <p>Activities</p>
            </a>
          </li>
                   
                    <li class="nav-item ">
                        <a class="nav-link" href="profile.php">
                            <icons-image _ngcontent-aye-c22="" _nghost-aye-c19=""><i _ngcontent-aye-c19="" class="material-icons icon-image-preview">settings</i></icons-image>
                            <p>setting</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="salesofday.php">
                            <i class="material-icons">library_books</i>
                            <p>sales</p>
                        </a>
                    </li>

                    <li class="nav-item ">
                        <a class="nav-link" href="../../chat/login.php">
                            <i class="material-icons">notifications</i>
                            <p>Discussion</p>
                        </a>
                    </li>
                    <!-- <li class="nav-item active-pro ">
                <a class="nav-link" href="./upgrade.html">
                    <i class="material-icons">unarchive</i>
                    <p>Upgrade to PRO</p>
                </a>
            </li> -->
                </ul>
            </div>
        </div>