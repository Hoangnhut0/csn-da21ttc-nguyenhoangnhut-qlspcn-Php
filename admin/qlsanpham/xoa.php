<?php
    $id = $_GET['id'];
    $sql = "DELETE FROM products where id_sp = $id";
    $query = mysqli_query($connect, $sql);
    header('location: index.php?page_layout=danhsach');
?>

