<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM thuonghieu where id_thuonghieu = $id";
    $query = mysqli_query($connect, $sql);
    header('location: index.php?page_layout=danhsachTH');
?>