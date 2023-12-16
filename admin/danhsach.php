<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DANH SÁCH</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .card{
            height: 590px;
            overflow: auto;
         }
    </style>
</head> 
<?php
    $sql = "SELECT * FROM products inner join brands on products.id_nsx = brands.id_nsx ";         
    $query = mysqli_query($connect,$sql);      
?>  
<body>
<div class="container mt-5">
    <div class="form-group">
        <div class="container-fluid">
        <h2 style="text-align: center;"> Danh Sách Sản Phẩm</h2> 
            <div class="card">
                <div class="card-body" >
                    <table class="table" style="text-align: center;">
                        <thead class="thead-dark">
                            <tr>
                                <th>ID</th>
                                <th>Tên Sp</th>
                                <th>Hình Ảnh</th>
                                <th>Màu</th>
                                <th>Giá</th>
                                <th>Thông Số Kỹ Thuật</th>
                                <th>Nhà SX</th>
                                <th>Thao Tác</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                                while($row = mysqli_fetch_assoc($query)){ ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['ten_sp']; ?></td>

                                        <td>
                                            <img style ="width: 100px;" src="img/<?php echo $row['image']; ?>">
                                        </td>   

                                        <td><?php echo $row['mau']; ?></td>
                                        <td style="color:red"><?php echo $row['gia_sp']; ?>Đ</td>
                                        <td><?php echo $row['manhinh'];?><br><?php echo $row['CPU']?><br><?php echo $row['dungluong']?><br><?php echo $row['dohoa'];?></td>
                                        <td><?php echo $row['ten_nsx']; ?></td>
                            
                                        <td>
                                            <a href="index.php?page_layout=sua&id=<?php echo $row['id_sp']; ?>" class="btn btn-info">Sửa</a> 
                                            <a onclick="return Del('<?php echo $row['ten_sp']; ?>')" href="index.php?page_layout=xoa&id=<?php echo $row['id_sp']; ?>;" class="btn btn-danger">Xóa</a>
                                        </td>
                                    </tr> 
                            <?php  }?>
                        </tbody>
                    </table>   
                </div>
            </div>
            <a class="btn btn-success" href="index.php?page_layout=them">Thêm Sản Phẩm</a>
            <a href="index.php?page_layout=home" class="text-white btn btn-sm btn-dark ">Home</a>
        </div>
    </div>
</div>
    <script>
        function Del(name){
            return confirm("Bạn có chắc muốn xóa sản phẩm: " + name + "?");
        }
    </script>  
</body>
</html>
