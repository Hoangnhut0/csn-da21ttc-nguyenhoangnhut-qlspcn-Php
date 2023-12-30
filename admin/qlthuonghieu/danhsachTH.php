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
</style>

<?php
    $sql_brand = "SELECT * FROM brands";         
    $query_brand = mysqli_query($connect,$sql_brand);
?>
<body>
<?php require_once 'dashboard.php'; ?>
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
                                            <img style ="width: 100px;" src="../img/<?php echo $row['logo']; ?>">
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