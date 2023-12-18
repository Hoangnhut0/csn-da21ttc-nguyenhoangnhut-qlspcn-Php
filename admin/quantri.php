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
        <div class="sidebar-header">
            <h3>Dashboard</h3>
        </div>
        <ul class="list-unstyled components">
            <li class="active">
            <a style="color: #f8f9fa;" href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle ">Admin</a>
        <ul class="collapse list-unstyled" id="homeSubmenu">
            <li>
                <a style="color: #f8f9fa;" class="btn" onclick="fetchDanhSach()">Sản Phẩm</a>
            </li>
            <li>
                <a style="color: #f8f9fa;" class="btn" onclick="fetthuonghieu()">Thương hiệu</a>
            </li>
            <li>
            </li> 
        </ul>
            </li>
            <li>    
                <a style="color: #f8f9fa;" href="index.php?page_layout=home">Trang chủ</a>
            </li>
        </ul>
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
        </div> 
    </div>
</body>
</html>