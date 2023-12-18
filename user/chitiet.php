<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
</head>
<style>
h3{
    color: red;
  }

.row{
    margin-top: 10%;
} 
img{
    border: 2px solid;
    border-radius: 10px;
}
</style>
<body>
    

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
</body>
</html>