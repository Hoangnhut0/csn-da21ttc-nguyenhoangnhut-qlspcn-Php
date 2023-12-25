<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
</head>
<style>
    .card{
            height: 570px;
            overflow: auto;
         }
         #sidebar {
            height: 100vh;
            width: 250px;
            position: fixed;
            background-color: #343a40;
            padding-top: 56px;
        } 
</style>
<?php
    session_start();
    if(!isset($_SESSION['user'])) 
    header('location: index.php?page_layout=login');
    $user = $_SESSION['user']
?> 
<?php
    $sql_brand = "SELECT * FROM brands";         
    $query_brand = mysqli_query($connect,$sql_brand);
?>
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
<div class="container mt-5 float-right">
    <div class="form-group">
        <div class="container-fluid">
        <h2 style="text-align: center;"> Danh Sách Thương Hiệu</h2> 
            <div class="card">
                <div class="card-body" >
                    <table class="table" style="text-align: center;">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Tên Thương Hiệu</th>
                                <th>Hình Ảnh</th>
                                <th>Thao Tác</th>    
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                                while($row = mysqli_fetch_assoc($query_brand)){ ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['ten_nsx']; ?></td>
                                        <td>
                                            <img style ="width: 100px;" src="img/<?php echo $row['logo']; ?>">
                                        </td>   
                                        <td>
                                            <a href="index.php?page_layout=suaTH&id=<?php echo $row['id_nsx']; ?>" class="btn btn-info">Sửa</a> 
                                            <a onclick="return Delth('<?php echo $row['ten_nsx']; ?>')" href="index.php?page_layout=xoaTH&id=<?php echo $row['id_nsx']; ?>;" class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr> 
                            <?php  }?>
                        </tbody>
                    </table>   
                </div>
            </div>
            <script>
                function Delth(name){
                    return confirm("Bạn có chắc muốn xóa thương hiệu: " + name + "?");
                }
            </script> 
        </div>
    </div>
</div>
</body>
</html>