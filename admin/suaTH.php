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
<?php require_once 'dashboard.php'; ?>
    
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