<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa thương hiệu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<style>
    #sidebar {
      height: 100vh;
      width: 250px;
      position: fixed;
      top: 0;
      left: 0;
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

    $id = $_GET['id'];
    
    $sql_up = "SELECT * FROM brands where id_nsx = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
       
    if(isset($_POST['sua'])){
        $br_name = $_POST['ten_nsx'];

        if($_FILES['logo']['name']==''){
            $logo = $row_up['logo'];
        }else{
            $logo = $_FILES['logo']['name'];
            $logo_tmp = $_FILES['logo']['tmp_name'];
            move_uploaded_file($logo_tmp,'img/' .$logo);
        }
            

        //cập nhật thông tin của sản phẩm có id_nsx = $id
        if(!isset($logo))
        {
            $sql = "UPDATE brands
        SET ten_nsx = '$br_name'
        Where id_nsx = '$id'";
        }
        else
        {
            $sql = "UPDATE brands 
        SET ten_nsx = '$br_name', logo = '$logo'
        Where id_nsx = '$id'";

        }
        
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsachTH' );   
        }
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
    
<div class="container float-right mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Thương Hiệu</h2>
        </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="">Tên thương hiệu</label>
                        <input type="text" name="ten_nsx" class="form-control"require value="<?php echo $row_up['ten_nsx']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Ảnh</label><br>
                        <input type="file" name="logo">
                    </div>
                    <button name="sua" class="btn btn-success" type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>