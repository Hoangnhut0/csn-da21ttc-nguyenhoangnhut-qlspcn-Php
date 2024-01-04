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
    
    $sql_up = "SELECT * FROM thuonghieu where id_thuonghieu = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    
       
    if(isset($_POST['sua'])){
        $br_name = $_POST['ten_thuonghieu'];
        $danhmuc = $_POST['id_danhmuc'];

        if($_FILES['logo']['name']==''){
            $logo = $row_up['logo'];
        }else{
            $logo = $_FILES['logo']['name'];
            $logo_tmp = $_FILES['logo']['tmp_name'];
            move_uploaded_file($logo_tmp,'img/logo/' .$logo);
        }
            

        //cập nhật thông tin của sản phẩm có id_nsx = $id
        if(!isset($logo))
        {
            $sql = "UPDATE thuonghieu
        SET ten_thuonghieu = '$br_name', id_danhmuc = '$danhmuc'
        Where id_thuonghieu = '$id'";
        }
        else
        {
            $sql = "UPDATE thuonghieu 
        SET ten_thuonghieu = '$br_name', logo = '$logo', id_danhmuc = '$danhmuc'
        Where id_thuonghieu = '$id'";

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
            <h2>Sửa Thương Hiệu</h2>
        </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="">Tên thương hiệu</label>
                        <input type="text" name="ten_thuonghieu" class="form-control"require value="<?php echo $row_up['ten_thuonghieu']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Ảnh</label><br>
                        <input type="file" name="logo">
                    </div>

                    <div class="form-group">
                        <label for="">Loại sản phẩm</label>
                        <select class="form-control" name=  "id_danhmuc">
                            <?php
                                $sql_danhmuc = "SELECT *FROM danhmuc";
                                $query_danhmuc = mysqli_query($connect, $sql_danhmuc);
                               
                                foreach($query_danhmuc as $row_danhmuc){
                                    if($dm==$row_danhmuc['id_danhmuc'])
                                        echo "<option selected value='".$row_danhmuc['id_danhmuc']."'>".$row_danhmuc['ten_danhmuc']."</option>";
                                    else
                                        echo "<option value='".$row_danhmuc['id_danhmuc']."'>".$row_danhmuc['ten_danhmuc']."</option>";
                                        
                                }
                                ?>
                        </select>
                    </div>
                    <button name="sua" class="btn btn-success" type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>