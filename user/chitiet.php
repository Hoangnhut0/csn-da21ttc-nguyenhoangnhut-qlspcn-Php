<?php require_once 'header_section.php'; ?>
<?php
    $id = $_GET['id'];
    $sql="SELECT * FROM products where id_sp = $id";
    $query = mysqli_query($connect,$sql);
    $row = mysqli_fetch_assoc($query);
?>
<?php
    $sql_danhmuc = "SELECT * FROM danhmuc";
    $query_danhmuc = mysqli_query($connect, $sql_danhmuc);
?>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <img src="img/<?php echo $row['image']?>" class="img-fluid" >
        </div>
        <div class="col-md-6">
            <h1 class="display-4" ><strong><?php echo $row['ten_sp'];?></strong></h1><br>
            <h3 class="lead"><b>Giá: </b><?php echo $row['gia_sp'];?> VND</h3><br><br>
            <p><?php echo $row['manhinh'];?></p>
            <p><?php echo $row['CPU'];?></p>
            <p><?php echo $row['dungluong']?></p>
            <p><?php echo $row['dohoa']?></p>
        </div>
    </div>
</div>
<?php
     require_once 'footer_section.php';
?>