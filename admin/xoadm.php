<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM danhmuc where id_danhmuc = $id";
    $query = mysqli_query($connect, $sql);
    header('location: index.php?page_layout=danhsachdm');
?>