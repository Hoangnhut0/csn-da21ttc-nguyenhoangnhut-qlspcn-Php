<?php 
    if(isset($_GET['quanly'])){
        $tam=$_GET['quanly'];
    }else{
        $tam='';
    }
    if($tam == 'danhmuc'){
        require_once 'main/danhmuc.php';
    }elseif($tam == 'lienhe'){
        require_once 'main/lienhe.php';
    }elseif($tam == 'thuonghieu'){
        require_once 'main/thuonghieu.php';
    }elseif($tam == 'chitiet'){
        require_once 'main/chitiet.php';
    }else{
        require_once 'main/index.php';
    }
?>