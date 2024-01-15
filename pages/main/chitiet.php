

    

<?php
    $id = $_GET['id'];
    $sql="SELECT * FROM sanpham where id_sp = $id";
    $query = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($query);
?>
<?php  
    $sql_danhmuc = "SELECT * FROM danhmuc";
    $query_danhmuc = mysqli_query($connect, $sql_danhmuc);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5">
            <div class="img-container">
                <img src="img/<?php echo $row['image']?>" class="img-fluid rounded shadow-sm">
            </div>
        </div>
        <div class="col-md-6 mt-5">
            <h1 class="display-4 text-center mb-4"><strong><?php echo $row['ten_sp'];?></strong></h1>
            <div class="card">
                <div class="card-body">
                    <h3 class="lead " style="color: red;"><b>Giá: </b><?php echo number_format($row['gia_sp']),0,'',''.' vnđ' ;?></h3>
                    <hr>
                    <p class="mb-4"><?php echo $row['manhinh'];?></p>
                    <p class="mb-4"><?php echo $row['CPU'];?></p>
                    <p class="mb-4"><?php echo $row['dungluong']?></p>
                    <p class="mb-4"><?php echo $row['dohoa']?></p>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>