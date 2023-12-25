<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
</head>
<?php
    session_start();
    if(!isset($_SESSION['user'])) 
    header('location: index.php?page_layout=login');
    $user = $_SESSION['user']
?> 
<?php
    $sql = "SELECT * FROM products inner join brands on products.id_nsx = brands.id_nsx ";         
    $query = mysqli_query($connect,$sql);      
?>  
<body>
<nav id="sidebar">
        <div class="sidebar-header mb-3" style="text-align: center; color: pink;">
            <i class='bx bxs-dashboard h2'></i>
            <a href="index.php?page_layout=quantri" class="h1 " style="color: pink;">Dashboard</a>
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
        <h2 style="text-align: center;"> Danh Sách Sản Phẩm</h2> 
            <div class="card">
                <div class="card-body" >
                     <table class="table" style="text-align: center;">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Tên Sp</th>
                                <th>Hình Ảnh</th>
                                <th>Màu</th>
                                <th>Giá</th>
                                <th>Thông Số Kỹ Thuật</th>
                                <th>Nhà SX</th>
                                <th>Thao Tác</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                                while($row = mysqli_fetch_assoc($query)){ ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['ten_sp']; ?></td>

                                        <td>
                                            <img style ="width: 100px;" src="img/<?php echo $row['image']; ?>">
                                        </td>   

                                        <td><?php echo $row['mau']; ?></td>
                                        <td style="color:red"><?php echo $row['gia_sp']; ?>Đ</td>
                                        <td><?php echo $row['manhinh'];?><br><?php echo $row['CPU']?><br><?php echo $row['dungluong']?><br><?php echo $row['dohoa'];?></td>
                                        <td><?php echo $row['ten_nsx']; ?></td>
                            
                                        <td>
                                            <a href="index.php?page_layout=sua&id=<?php echo $row['id_sp']; ?>" class="btn btn-info">Sửa</a> 
                                            <a onclick="return Del('<?php echo $row['ten_sp']; ?>')" href="index.php?page_layout=xoa&id=<?php echo $row['id_sp']; ?>;" class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr> 
                            <?php  }?>
                        </tbody>
                    </table>   
                </div>
            </div>
        </div>
    </div>
</div>
    <script>
        function Del(name){
            return confirm("Bạn có chắc muốn xóa sản phẩm: " + name + "?");
        }
    </script>  
</body>
</html>
