<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<?php
    session_start();
    if(!isset($_SESSION['user'])) 
    header('location: index.php?page_layout=login');
    $user = $_SESSION['user']
?>
<style>
    /* Custom Styles */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
      padding-top: 56px;
    }

    #sidebar {
      height: 100vh;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
      background-color: #343a40;
      padding-top: 56px;
    }

    #content {
      margin-left: 250px;
      padding: 20px;
    }
</style>
<body>
    <nav id="sidebar">
        <div class="sidebar-header mb-3" style="text-align: center; color: pink;">
            <i class='bx bxs-dashboard h2'></i>
            <a href="index.php?page_layout=quantri" class="h1 ">Dashboard</a>
        </div>
        <div style="text-align: center;" class="mb-5">
            <h3 style="color: #f8f9fa;"><?= $user['ho'] .' '. $user['ten']?></h3>
        </div>
        <ul class="list-unstyled components">
            <li>
                
                <a style="color: #f8f9fa;" class="btn mb-4 " href="index.php?page_layout=danhsach"><i class='bx bxl-product-hunt'></i>   Danh sách sản phẩm</a>
            </li>
            <li>
                <a style="color: #f8f9fa;" class="btn mb-4" href="index.php?page_layout=danhsachTH"><i class='bx bx-street-view'></i>    Danh sách thương hiệu</a>
            </li>
            <li>
                
                <a style="color: #f8f9fa;" class="btn mb-4" href="index.php?page_layout=them"><i class='bx bx-message-square-add'></i>   Thêm sản phẩm</a>
            </li> 
            <li>
                <a style="color: #f8f9fa;" class="btn mb-4" href="index.php?page_layout=themTH"><i class='bx bx-message-square-add'></i>    Thêm thương hiệu</a>
            </li>
            <li>  
                <a style="color: #f8f9fa;" class="btn mb-4" href="index.php?page_layout=home"> <i class='bx bxs-home' ></i>    Trang chủ</a>
            </li>
        </ul>
        <div style="text-align: center;">
                <a href="index.php?page_layout=logout" class="btn" style="color: #f8f9fa;"><i class='bx bx-power-off' ></i>    Log-out</a>
        </div>
    </nav>


<div class="container-fluid mt-4">
    <div class="row">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h1 class="h2">Dashboard</h1>
            </div>
    <!-- Statistics Section -->
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Total Users</h5>
                    <p class="card-text">500</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Revenue</h5>
                    <p class="card-text">$50,000</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Page Views</h5>
                    <p class="card-text">100,000</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Section (you can use a library like Chart.js) -->
    <div class="mt-4">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.126136853455!2d106.34394437480566!3d9.923451590178084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31a0175ea296facb%3A0x55ded92e29068221!2zVHLGsOG7nW5nIMSQ4bqhaSBI4buNYyBUcsOgIFZpbmg!5e0!3m2!1svi!2s!4v1703570312042!5m2!1svi!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <!-- Add your charts here -->
    </div>
        </main>
    </div>
</div>
</body>
</html>