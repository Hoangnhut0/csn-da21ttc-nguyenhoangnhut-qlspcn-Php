<style>
     .danhsachsanpham {
    height: 480px;
    overflow: auto;
    margin-bottom: 50px;
    background: #d0d0e1;
    padding: 20px;
    border-radius: 10px;
    } 

    img.img-logo {
    margin: 30px 0 45px 31px;
    border: 1px solid #000;
    border-radius: 17px;
    text-align: center;
    width: 10%;
}
</style>
<div class="container ">
    <h2 class="text-center mb-4">Gợi ý hôm nay</h2>
    
    <div class=" danhsachsanpham">
    <h3 style="text-align: center;">Điện thoại</h3><br> 
        <div class="row">
            <?php               
            $sql = "SELECT * FROM sanpham ";
            $query = mysqli_query($connect,$sql);
                    while($row = mysqli_fetch_array($query)){
                        if($row['id_danhmuc'] == 1) {?>
                            <div class="col-lg-4 col-md-6 mb-4" style="min-height: 440px; margin-bottom: 65px;">
                                <div class="card product-card">
                                    <img class="card-img-top  " src="img/<?php echo $row['image']; ?>" alt="Product 1">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong><?php echo $row['ten_sp']; ?></strong></h5>
                                        <p style="color: red;"><?php echo number_format($row['gia_sp']),0,'',''.' vnđ' ;?> VND</p>
                                        <a href="?quanly=chitiet&id=<?php echo $row['id_sp']; ?>" class="btn btn-info">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                    <?php }}?>
        </div>
    </div>
    
    <div class="danhsachsanpham">
    <h3 style="text-align: center;">Laptop</h3><br> 
        <div class="row">
            <?php     
                $connect2 = mysqli_connect('localhost','root','','db_qlsp');  
                $sql_laptop = "SELECT * FROM sanpham";
                $query_laptop = mysqli_query($connect2, $sql_laptop);        
                    while($row = mysqli_fetch_assoc($query_laptop)){
                        if($row['id_danhmuc'] == 2) {?>
                            <div class="col-lg-4 col-md-6 mb-4" style="min-height: 440px; margin-bottom: 65px;">
                                <div class="card product-card">
                                    <img class="card-img-top  " src="img/<?php echo $row['image']; ?>" alt="Product 1">
                                    <div class="card-body">
                                        <h5 class="card-title"><strong><?php echo $row['ten_sp']; ?></strong></h5>
                                        <p style="color: red;"><?php echo number_format($row['gia_sp']),0,'',''.' vnđ' ;?> VND</p>
                                        <a href="?quanly=chitiet&id=<?php echo $row['id_sp']; ?>" class="btn btn-info">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                    <?php }}?>
        </div>
    </div>
</div>