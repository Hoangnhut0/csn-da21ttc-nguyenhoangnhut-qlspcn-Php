<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Mục</title>
</head>
<body>
    <?php require_once 'dashboard.php' ?>
    <?php
    $sql_danhmuc = "SELECT * FROM danhmuc";         
    $query_danhmuc = mysqli_query($connect,$sql_danhmuc);
?>
<div class="container mt-5 float-right">
    <div class="form-group">
        <div class="container-fluid">
        <h2 style="text-align: center;"> Danh Sách Danh Mục</h2> 
            <div class="card">
                <div class="card-body" >
                    <table class="table" style="text-align: center;">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Tên Thương Danh Mục</th>
                                <th>Thao Tác</th>    
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                                while($row = mysqli_fetch_assoc($query_danhmuc)){ ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['ten_danhmuc']; ?></td>  
                                        <td>
                                            <a href="index.php?page_layout=suadm&id=<?php echo $row['id_danhmuc']; ?>" class="btn btn-info">Sửa</a> 
                                            <a onclick="return Del('<?php echo $row['ten_danhmuc']; ?>')" href="index.php?page_layout=xoadm&id=<?php echo $row['id_danhmuc']; ?>;" class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr> 
                            <?php  }?>
                        </tbody>
                    </table>   
                </div>
            </div>
            <script>
                function Del(name){
                    return confirm("Bạn có chắc muốn xóa danh mục: " + name + "?");
        }
            </script> 
        </div>
    </div>
</div>
</body>
</html>