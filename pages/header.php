<?php
    require_once './config/db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Chủ </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
   <link rel="stylesheet" href="css/home.css">
</head>

<style>
    
</style>

<?php
    $sql_danhmuc = "SELECT * FROM danhmuc";
    $query_danhmuc = mysqli_query($connect, $sql_danhmuc);

    $sql_thuonghieu = "SELECT * FROM brands";
    $query_thuonghieu = mysqli_query($connect, $sql_thuonghieu);
    
    $sql = "SELECT * FROM products inner join brands on products.id_nsx = brands.id_nsx ";
    $query = mysqli_query($connect,$sql);
?>

<body>
<nav class="navbar navbar-expand-sm bg-dark navbae-dark " >
    <div class=" container">
        <ul class="navbar-nav ">
            <li class="nav-item" >
                <a href="index.php?page_layout=home" class="nav-link text-white"><b>Trang chủ</b></a>
            </li>     
            <div class="dropdown">
                <button type="button" class="btn btn-dark text-white-50 dropdown-toggle" data-toggle="dropdown">Danh mục</button>
                <div id="id_danhmuc" class="dropdown-menu" >
                    <?php
                        while($row_danhmuc = mysqli_fetch_assoc($query_danhmuc)){
                    ?>
                        <a class="dropdown-item" href="?quanly=danhmuc&id=<?php echo $row_danhmuc['id_danhmuc']?>"><?php echo $row_danhmuc['ten_danhmuc']?></a>
                <?php }?>
                </div>
            </div>

            <div class="dropdown">
                <button type="button" class="btn btn-dark text-white-50 dropdown-toggle" data-toggle="dropdown">Thương hiệu</button>
                <div id="id_danhmuc" class="dropdown-menu" >
                    <?php
                        while($row_thuonghieu = mysqli_fetch_assoc($query_thuonghieu)){
                    ?>
                        <a style="text-align: center;" class="dropdown-item" href="?quanly=thuonghieu&id=<?php echo $row_thuonghieu['id_nsx']?>"><img src="img/<?php echo $row_thuonghieu['logo']?>" alt=""></a>
                <?php }?>
                </div>
            </div>
            
            <li class="nav-item">
                <a type="button" href="#" class="nav-link text-white-50 ">Liên hệ</a>
            </li>
        </ul>
    </div>   
         
    <form class="form-inline" >
        <div class="input-group" >
            <input type="text" class="form-control" placeholder="Search" >
        </div>
    </form>
</nav>
<!-- Carousel -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block " src="img/banner iphone 15.jpeg" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block" src="img/asus-gaming-banner-thinkpro.jpg" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block" src="img/quangcao-samsung.jpg" alt="">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

