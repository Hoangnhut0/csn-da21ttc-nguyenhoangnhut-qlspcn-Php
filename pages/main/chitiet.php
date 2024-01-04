
<style>
h3{
    color: red;
  }

.row{
    margin-top: 10%;
} 
.anhchitiet{
    border: 2px solid;
    border-radius: 10px;
    width: auto;
}
</style>
<body>
    

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

<div class="container ">
    <div class="row">
        <div class="col-md-6 anhchitiet">
            <img   src="img/<?php echo $row['image']?>" class="img-fluid" >
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