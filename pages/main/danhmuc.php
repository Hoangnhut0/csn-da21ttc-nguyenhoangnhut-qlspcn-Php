<style>
    img.img-logo {
    margin: 30px 0 45px 31px;
    border: 1px solid #000;
    border-radius: 17px;
    text-align: center;
    width: 10%;
}
</style>
<?php
    
    $sql_pro = "SELECT * FROM sanpham WHERE sanpham.id_danhmuc='$_GET[id]' ORDER BY id_sp DESC";         
    $query_pro = mysqli_query($connect,$sql_pro);
    
    $sql_danhmuc = "SELECT * FROM danhmuc WHERE danhmuc.id_danhmuc='$_GET[id]' LIMIT 1";
    $query_danhmuc = mysqli_query($connect,$sql_danhmuc);
    $row_title = mysqli_fetch_array($query_danhmuc);

    $sql_thuonghieu = "SELECT * FROM thuonghieu WHERE thuonghieu.id_danhmuc='$_GET[id]' order by thuonghieu.id_thuonghieu DESC";
    $query_thuonghieu = mysqli_query($connect,$sql_thuonghieu);
    $row_thuonghieu = mysqli_fetch_assoc($query_thuonghieu);
    
?>

<!-- Product Section -->
<h3 class="mt-5" style="text-align: center;">Danh mục: <?php echo $row_title['ten_danhmuc'];?></h3>
    <div class="btni">
        <div class=" btn-icon" style="text-align: center;">
            <?php
                while($row_thuonghieu = mysqli_fetch_assoc($query_thuonghieu)){  ?>
                    <a href="?quanly=thuonghieu&id=<?php echo $row_thuonghieu['id_thuonghieu']?>" class=""><img class="img-logo" src="./img/logo/<?php echo $row_thuonghieu['logo']?>" alt=""></a>
                <?php }?>
        </div>
    </div>
            
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
    