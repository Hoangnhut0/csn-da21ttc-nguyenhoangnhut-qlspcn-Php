<?php
     require_once 'header_section.php';
?>
<style>
    .danhsachsanpham {
    height: 480px;
    overflow: auto;
    margin-bottom: 50px;
    background: #d0d0e1;
    padding: 20px;
    border-radius: 10px;
    }
</style>
<!-- Product Section -->
<div class="container ">
    <h2 class="text-center mb-4">Gợi ý hôm nay</h2>
    <h3 style="text-align: center;">Điện thoại</h3>
    <div class="row danhsachsanpham"> 
        <?php               
                while($row = mysqli_fetch_assoc($query)){
                    if($row['id_danhmuc'] == 1) {?>
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
                <?php }}?>
    </div>
    <h3 style="text-align: center;">Laptop</h3> 
    <div class="row danhsachsanpham">
        <?php     
             $connect2 = mysqli_connect('localhost','root','','data_qlsp');  
             $sql_laptop = "SELECT * FROM products";
             $query_laptop = mysqli_query($connect2, $sql_laptop);        
                while($row = mysqli_fetch_assoc($query_laptop)){
                    if($row['id_danhmuc'] == 2) {?>
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
                <?php }}?>
    </div>
</div>


<?php
require_once 'footer_section.php';
?>

