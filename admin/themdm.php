<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Danh Mục</title>
    
</head>

<?php
    $sql_brand = "SELECT * FROM brands";
    $sql_danhmuc = "SELECT * FROM danhmuc";
    
    $query_danhmuc = mysqli_query($connect, $sql_danhmuc);

    if(isset($_POST['ok'])){

        $danhmuc = $_POST['ten_danhmuc'];

        $sql = "INSERT INTO danhmuc (ten_danhmuc)
        VALUES ('$danhmuc')";
        $query = mysqli_query($connect, $sql);
        header('location: index.php?page_layout=danhsachdm' );
    }
?>
<body>
<?php require_once 'dashboard.php'; ?>
<div class="container float-right">
    <div class="card">
        <div class="card-header">
            <h2>Thêm Danh Mục</h2>
        </div>
            <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" name="ten_danhmuc" class="form-control"require>
                    </div>
                    <button name="ok" class="btn btn-success" type="submit">Thêm</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>