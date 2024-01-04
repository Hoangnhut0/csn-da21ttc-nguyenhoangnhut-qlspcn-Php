<?php
    
    $sql_pro = "SELECT * FROM sanpham WHERE sanpham.id_thuonghieu='$_GET[id]' ORDER BY id_sp DESC";         
    $query_pro = mysqli_query($connect,$sql_pro);
    
    $sql_brands = "SELECT * FROM thuonghieu WHERE thuonghieu.id_thuonghieu='$_GET[id]' LIMIT 1";
    $query_brands = mysqli_query($connect,$sql_brands);
    $row_title = mysqli_fetch_array($query_brands);
    
?>

<!-- Product Section -->
<div class="container ">
    <h3 class="mt-5 mb-5" style="text-align: center;"><?php echo $row_title['ten_thuonghieu'];?></h3>
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
?>