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
        <div class="sidebar-header" style="text-align: center;">
            <h2>Dashboard</h2>
        </div>
        <div style="text-align: center;">
            <h3 style="color: #f8f9fa;"><?= $user['ho'] .' '. $user['ten']?></h3>
        </div>
        <ul class="list-unstyled components">
            <li>
                <a style="color: #f8f9fa;" class="btn" onclick="fetchDanhSach()">Danh sách sản phẩm</a>
            </li>
            <li>
                <a style="color: #f8f9fa;" class="btn" onclick="fetthuonghieu()">Danh sách thương hiệu</a>
            </li>
            <li>
                <a style="color: #f8f9fa;" class="btn" onclick="themsanpham()">Thêm sản phẩm</a>
            </li> 
            <li>
                <a style="color: #f8f9fa;" class="btn" onclick="themthuonghieu()">Thêm thương hiệu</a>
            </li>
            <li>  
                <a style="color: #f8f9fa;" class="btn" href="index.php?page_layout=home">Trang chủ</a>
            </li>
        </ul>
        <div style="text-align: center;">
                <a href="index.php?page_layout=logout" class="btn" style="color: #f8f9fa;">Log-out</a>
        </div>
    </nav>


    <div id="content">
        <div class="container" >
            <script>
                function fetchDanhSach() {
                    fetch('index.php?page_layout=danhsach')
                    .then(response => response.text())
                    .then(data => {
                        document.querySelector('.container').innerHTML = data;
                    });
                }
    
                function Del(name){
                    return confirm("Bạn có chắc muốn xóa sản phẩm: " + name + "?");
                }
            </script>
            <script>
                function fetthuonghieu() {
                    fetch('index.php?page_layout=danhsachTH')
                    .then(response => response.text())
                    .then(data => {
                        document.querySelector('.container').innerHTML = data;
                    });
                }
    
                function Delth(name){
                    return confirm("Bạn có chắc muốn xóa thương hiệu: " + name + "?");
                } 
            </script>

            <script>
                function themsanpham() {
                    fetch('index.php?page_layout=them')
                    .then(response => response.text())
                    .then(data => {
                        document.querySelector('.container').innerHTML = data;
                    });
                }
            </script>

            <script>
                function themthuonghieu() {
                    fetch('index.php?page_layout=themTH')
                    .then(response => response.text())
                    .then(data => {
                        document.querySelector('.container').innerHTML = data;
                    });
                }
            </script>
            
        </div> 
    </div>
</body>
</html>