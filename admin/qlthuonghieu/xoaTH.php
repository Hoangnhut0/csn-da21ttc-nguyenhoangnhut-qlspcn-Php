<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM brands where id_nsx = $id";
    $query = mysqli_query($connect, $sql);
    header('location: index.php?page_layout=danhsachTH');
?>