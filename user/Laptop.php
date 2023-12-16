<style>
    .btni{
        text-align: center;
        margin-bottom: 45px;
        margin-top: 32px;
    }
    .img-logo{
        padding: 5px;
        border-radius: 30px;
        width: 170px;
        border: 1px solid #000;
        margin-right: 10px;
    }
</style>
<?php
     require_once 'header_section.php';
?>
<?php
    $id_nsx = 0;
    if(isset( $_GET['id_nsx'])) {
        $id_nsx = $_GET['id_nsx'];
    }
    $sql_brand = "SELECT * FROM brands";         
    $query_brand = mysqli_query($connect,$sql_brand);
    $sql_prd = "SELECT * FROM products";
    $query_prd = mysqli_query($connect, $sql_prd);
    $sql = "SELECT * FROM products inner join brands on products.id_nsx = brands.id_nsx ";
    $query = mysqli_query($connect,$sql);
?>


<div class="btni">
    <div class=" btn-icon">
        <?php
         while($row = mysqli_fetch_assoc($query_brand)){
            if($row['id_danhmuc'] == 2){
            ?>
                <a href="index.php?page_layout=LaptopTH&id_nsx=<?php echo $row['id_nsx']; ?>">
                    <img class="img-logo"  src="img/<?php echo $row['logo']; ?>">
                </a>                                            
    <?php  }}?>
    </div>    
</div>

<!-- Product Section -->
<div class="container ">
    
    <div class="row">
        <!-- render tất cả sản phẩm mình có -->
        <?php
            while($row = mysqli_fetch_assoc($query_prd)){ 
                if($row['id_danhmuc'] == 2) { ?>
                <div class="col-lg-4 col-md-6 mb-4" style="min-height: 440px; margin-bottom: 65px;">
                        <div class="card product-card">
                            <img class="card-img-top  " src="img/<?php echo $row['image']; ?>" alt="Product 1">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['ten_sp']; ?></h5>
                                <p style="color:red"><?php echo $row['gia_sp'];?> VND </p>
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