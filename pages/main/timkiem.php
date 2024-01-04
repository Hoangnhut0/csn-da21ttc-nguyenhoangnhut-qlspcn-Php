<?php
if (isset($_POST['timkiem'])) {
    $tukhoa = $_POST['tukhoa'];

    $sql_pro = "SELECT * FROM sanpham, danhmuc WHERE sanpham.id_danhmuc=danhmuc.id_danhmuc AND sanpham.ten_sp LIKE '%" . $tukhoa . "%' ";
    $query_pro = mysqli_query($connect, $sql_pro);

    if (mysqli_num_rows($query_pro) > 0) {?>
        <h3 style="text-align: center;"><?php echo $_POST['tukhoa']; ?></h3>
        <div class="container">
            <div class="row">    
                <?php
                    while($row_pro = mysqli_fetch_array($query_pro)){  ?>
                        <div class="col-lg-4 col-md-6 mb-4" style="min-height: 440px; margin-bottom: 65px;">
                            <div class="card product-card" >
                                <img class="card-img-top  " src="img/<?php echo $row_pro['image']; ?>" alt="Product 1">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row_pro['ten_sp']; ?></h5>
                                    <p style="color:red"><?php echo number_format($row_pro['gia_sp']),0,'',''.' vnđ' ;?></p>
                                    <a href="?quanly=chitiet&id=<?php echo $row_pro['id_sp']; ?>" class="btn btn-info">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                <?php }?>
            </div>
        </div>
<?php
    } else {
?>
        <h2 class="text-center">Không tìm thấy sản phẩm !</h2>
<?php
    }
}
?>
