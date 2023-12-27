<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thương hiệu</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<?php
    $sql_brand = "SELECT * FROM brands";
    $sql_danhmuc = "SELECT * FROM danhmuc";
    
    $query_danhmuc = mysqli_query($connect, $sql_danhmuc);

    if(isset($_POST['y'])){
        $br_name = $_POST['ten_nsx'];

        $logo = $_FILES['logo']['name'];
        $logo_tmp = $_FILES['logo']['tmp_name'];
        $danhmuc = $_POST['id_danhmuc'];

        $sql = "INSERT INTO brands (ten_nsx, logo, id_danhmuc)
        VALUES ('$br_name', '$logo','$danhmuc')";
        $query = mysqli_query($connect, $sql);
        move_uploaded_file($logo_tmp,'img/'.$logo);
        header('location: index.php?page_layout=themTH' );
    }
?>
<body>
<?php require_once './admin/dashboard.php'; ?>
<div class="container float-right">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Thương Hiệu</h2>
        </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên thương hiệu</label>
                        <input type="text" name="ten_nsx" class="form-control"require>
                    </div>

                    <div class="form-group">
                        <label for="">Ảnh</label><br>
                        <input type="file" name="logo" >
                    </div>

                    <div class="form-group">
                        <label for="">Danh mục</label>
                        <select class="form-control" name=  "id_danhmuc">
                            <?php
                                foreach($query_danhmuc as $row_danhmuc){?>
                                    <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_danhmuc']?></option>
                            <?php }?>
                        </select>
                    <button name="y" class="btn btn-success" type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>