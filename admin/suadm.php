<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa Danh Mục</title>
    
</head>


<?php

    $id = $_GET['id'];
    
    $sql_up = "SELECT * FROM danhmuc where id_danhmuc = $id";
    $query_up = mysqli_query($connect, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);
       
    if(isset($_POST['sua'])){
        $danhmuc = $_POST['ten_nsx'];

            

        //cập nhật thông tin của sản phẩm có id_nsx = $id
        
        $sql = "UPDATE danhmuc
        SET ten_danhmuc = '$danhmuc'
        Where id_danhmuc = '$id'";
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsachdm' );   
    } 
?>
<body>
<?php require_once 'dashboard.php'; ?>
    
<div class="container float-right mt-5">
    <div class="card">
        <div class="card-header">
            <h2>Sua Danh Mục </h2>
        </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                        <label for="">Tên Danh Mục</label>
                        <input type="text" name="ten_danhmuc" class="form-control"require value="<?php echo $row_up['ten_danhmuc']; ?>">
                    </div>
                    <button name="sua" class="btn btn-success" type="submit">Sửa</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>