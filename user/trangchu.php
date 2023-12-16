<?php
     require_once 'header_section.php';
?>
<!-- Product Section -->
<div class="container ">
    <h2 class="text-center mb-4">Gợi ý hôm nay</h2>
    <div class="row">
        <?php               
            while($row = mysqli_fetch_assoc($query)){ ?>
                <div class="col-lg-4 col-md-6 mb-4" style="min-height: 440px; margin-bottom: 65px;">
                    <div class="card product-card">
                        <img class="card-img-top  " src="img/<?php echo $row['image']; ?>" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title"><strong><?php echo $row['ten_sp']; ?></strong></h5>
                            <p style="color: red;"><?php echo $row['gia_sp']; ?> VND</p>
                            <a href="index.php?page_layout=chitiet&id=<?php echo $row['id_sp']; ?>" class="btn btn-info">Xem chi tiết</a>
                        </div>
                    </div>
                </div>
            <?php }?>
    </div>
</div>


<?php
require_once 'footer_section.php';
?>

