<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    
    
</head>

<?php
    $sql_brand = "SELECT * FROM brands";         
    $query_brand = mysqli_query($connect,$sql_brand);
?>
<?php
    $sql_brand = "SELECT * FROM brands";
    $sql_danhmuc = "SELECT * FROM danhmuc";
        
    $query_brand = mysqli_query($connect,$sql_brand);
    $query_danhmuc = mysqli_query($connect, $sql_danhmuc);
    //$query = mysqli_query($connect, "INSERT INTO danhmuc(ten_danhmuc) VALUES ('Điện thoại')");
    if(isset($_POST['sbm'])){
        $prd_name = $_POST['ten_sp'];

        $image = $_FILES['image']['name'];
        $image_tmp = $_FILES['image']['tmp_name'];

        $gia_sp = $_POST['gia_sp'];
        $mau = $_POST['mau'];
        $manhinh = $_POST['manhinh'];
        $CPU = $_POST['CPU'];
        $dungluong = $_POST['dungluong'];
        $dohoa = $_POST['dohoa'];
        $id_nsx = $_POST['id_nsx'];
        $id_danhmuc = $_POST['id_danhmuc'];
        $sql = "INSERT INTO products (ten_sp, image, gia_sp, mau, manhinh, CPU, dungluong, dohoa, id_nsx, id_danhmuc)
        VALUES ('$prd_name', '$image', '$gia_sp', '$mau', '$manhinh','$CPU','$dungluong','$dohoa', '$id_nsx', '$id_danhmuc')";
        $query = mysqli_query($connect, $sql);
        move_uploaded_file($image_tmp,'img/'.$image);
        header('location: index.php?page_layout=danhsach' );
    }
    ?>

<body>
<?php require_once 'dashboard.php'; ?>
    <div class="container float-right">
        <div class="card">
            <div class="card-header">
                <h2>Thêm Sản Phẩm</h2>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên Sản Phẩm</label>
                        <input type="text" name="ten_sp" class="form-control"require>
                    </div>

                    <div class="form-group">
                        <label for="">Ảnh</label><br>
                        <input type="file" name="image" >
                    </div>

                    <div class="form-group">
                        <label for="">Giá</label>
                        <input type="number" name="gia_sp" class="form-control"require >
                    </div>

                    <div class="form-group">
                        <label for="">Màu sắc</label>
                        <input type="text" name="mau" class="form-control" require>
                    </div>

                    <div class="form-group">
                        <label for="comment">Màn Hình</label>
                        <input type="text" name="manhinh" class="form-control"require >
                    </div>

                    <div class="form-group">
                        <label for="comment">CPU</label>
                        <input type="text" name="CPU" class="form-control"require >
                    </div>

                    <div class="form-group">
                        <label for="comment">Dung Lượng</label>
                        <input type="text" name="dungluong" class="form-control"require >
                    </div>

                    <div class="form-group">
                        <label for="comment">Card</label>
                        <input type="text" name="dohoa" class="form-control"require >
                    </div>

                    <div class="form-group">
                        <label for="">Nhà Sản Xuất</label>
                        <select class="form-control" name="id_nsx">
                            <?php
                                while($row_brand = mysqli_fetch_assoc($query_brand)){?>
                                    <option value="<?php echo $row_brand['id_nsx']?>"><?php echo $row_brand['ten_nsx']?></option>
                            <?php }?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Loại sản phẩm</label>
                        <select class="form-control" name=  "id_danhmuc">
                            <?php
                                foreach($query_danhmuc as $row_danhmuc){?>
                                    <option value="<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_danhmuc']?></option>
                            <?php }?>
                        </select>
                    </div>
                    <button name="sbm" class="btn btn-success" type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>