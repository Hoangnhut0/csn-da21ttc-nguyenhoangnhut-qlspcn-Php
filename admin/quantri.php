<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<style>
    /* Custom Styles */
    body {
      font-family: 'Arial', sans-serif;
      background-color: #f8f9fa;
      padding-top: 56px;
    }

    

    #content {
      margin-left: 250px;
      padding: 20px;
    }
</style>
<body>    
<?php require_once 'dashboard.php' ?>
<div class="container-fluid ">
    <div class="row ">
        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">   
        <div class="row">
        <div class="col-md-4 mb-3">
            <div class="card" style="background: #99ff99;">
                <div class="card-body">
                    <?php
                        $sql_all = "SELECT COUNT(*) as product_all FROM products";
                        $result1 = $connect->query($sql_all);
                        if($row1 = $result1->fetch_assoc()){?>
                            <h5 class="card-title">Tất cả</h5>
                            <p class="card-text"><?php echo $row1['product_all'];?> Sản Phẩm</p>
                        <?php }?>
                </div>
            </div>
        </div>


        <?php
            $sql = "SELECT products. id_danhmuc, danhmuc. ten_danhmuc, COUNT(*) as product_count FROM products 
            JOIN danhmuc ON products.id_danhmuc = danhmuc.id_danhmuc
            GROUP BY products.id_danhmuc";
            $result = $connect->query($sql);
            if($result){
                while ($row = $result->fetch_assoc()) {?>
                    <div class="col-md-4 ">
                        <div class="card" style="background:  #9999ff;" >
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['ten_danhmuc']; ?></h5>
                                <p class="card-text"><?php echo $row['product_count'];?> Sản Phẩm</p>
                            </div>
                        </div>
                    </div>
        <?php } }?>

    <div class="container" style="text-align: center;">
        <?php
            $sql_th = "SELECT products. id_nsx, brands. ten_nsx, COUNT(*) as product_th FROM products 
            JOIN brands ON products. id_nsx = brands. id_nsx
            GROUP BY products.id_nsx";
            $result2 = $connect->query($sql_th);
        ?>
        <table class="table">
            <thead class="thead-light">
                <tr>
                    <th>Thương Hiệu</th>
                    <th>Số lượng sản phẩm</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    if($result2){
                        while ($row2 = $result2->fetch_assoc()) {?>
                            <tr>
                                <td><?php echo $row2['ten_nsx']; ?></td>
                                <td><?php echo $row2['product_th'];?></td>
                            </tr>
                <?php }} ?>
            </tbody>
        </table>
    </div>
    
        </main>
    </div>
</div>
</body>
</html>