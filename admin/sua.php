<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<?php

    $id = $_GET['id'];
    
    $sql_up = "SELECT * FROM products where id_sp = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
    $nsx = $dm = "";
    $nsx = $row_up["id_nsx"];
    $dm = $row_up["id_danhmuc"];    
    if(isset($_POST['ok'])){
        $prd_name = $_POST['ten_sp'];

        if($_FILES['image']['name']==''){
            $image = $row_up['image'];
        }else{
            $image = $_FILES['image']['name'];
            $image_tmp = $_FILES['image']['tmp_name'];
            move_uploaded_file($image_tmp,'img/' .$image);
        }
            
        $gia_sp = $_POST['gia_sp'];
        $mau = $_POST['mau'];
        $manhinh = $_POST['manhinh'];
        $CPU = $_POST['CPU'];
        $dungluong = $_POST['dungluong'];
        $dohoa = $_POST['dohoa'];
        $id_nsx = $_POST['id_nsx'];
        $id_danhmuc = $_POST['id_danhmuc'];

        //cập nhật thông tin của sản phẩm có id_sp = $id
        if(!isset($image))
        {
            $sql = "UPDATE products 
        SET ten_sp = '$prd_name', gia_sp = '$gia_sp', mau = '$mau', manhinh = '$manhinh',CPU = '$CPU',dungluong = '$dungluong',dohoa = '$dohoa', id_nsx = '$id_nsx', id_danhmuc = '$id_danhmuc'
        Where id_sp = '$id'";
        }
        else
        {
            $sql = "UPDATE products 
        SET ten_sp = '$prd_name', image = '$image', gia_sp = '$gia_sp', mau = '$mau', manhinh = '$manhinh',CPU = '$CPU',dungluong = '$dungluong',dohoa = '$dohoa', id_nsx = '$id_nsx', id_danhmuc = '$id_danhmuc'
        Where id_sp = '$id'";

        }
        
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsach' );   
        }
?>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>Sửa Sản Phẩm</h2>
            </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên Sản Phẩm</label>
                        <input type="text" name="ten_sp" class="form-control"require value="<?php echo $row_up['ten_sp']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Ảnh</label><br>
                        <input type="file" name="image">
                    </div>

                    <div class="form-group">
                        <label for="">Giá</label>
                        <input type="number" name="gia_sp" class="form-control" require value="<?php echo $row_up['gia_sp']; ?>">
                    </div>

                    <div class="form-group">
                        <label for="">Màu sắc</label>
                        <input type="text" name="mau" class="form-control" require value="<?php echo $row_up['mau'];?>">
                    </div>

                    <div class="form-group">
                        <label for="comment">Màn Hình</label>
                        <input type="text" name="manhinh" class="form-control"require  value="<?php echo $row_up['manhinh']; ?>"></input>
                    </div>

                    <div class="form-group">
                        <label for="comment">CPU</label>
                        <input type="text" name="CPU" class="form-control"require  value="<?php echo $row_up['CPU']; ?>"></input>
                    </div>

                    <div class="form-group">
                        <label for="comment">Dung Lượng</label>
                        <input type="text" name="dungluong" class="form-control"require  value="<?php echo $row_up['dungluong']; ?>"></input>
                    </div>

                    <div class="form-group">
                        <label for="comment">Card</label>
                        <input type="text" name="dohoa" class="form-control"require  value="<?php echo $row_up['dohoa']; ?>"></input>
                    </div>

                    <div class="form-group">
                        <label for="">Nhà Sản Xuất</label>
                        <?php echo $nsx;?>
                        <select class="form-control" name="id_nsx">
                            <?php
                                $sql_brand = "SELECT * FROM brands";
                                $query_brand = mysqli_query($connect,$sql_brand);
                                while($row_brand = mysqli_fetch_assoc($query_brand)){
                                    if($nsx==$row_brand['id_nsx'])
                                        echo "<option selected value='".$row_brand['id_nsx']."'>".$row_brand['ten_nsx']."</option>";
                                    else
                                    echo "<option value='".$row_brand['id_nsx']."'>".$row_brand['ten_nsx']."</option>";
                               }
                               ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">Loại sản phẩm</label>
                        <?php echo $dm;?>
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
                    <button name="ok" class="btn btn-success" type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>