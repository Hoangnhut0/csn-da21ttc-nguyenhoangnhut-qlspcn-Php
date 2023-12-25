<?php require_once 'config/db.php';?>
<?php
   

    if(isset($_GET['page_layout'])){
        switch($_GET['page_layout']){
            case 'login':
                require_once 'login.php';
                break;
                
            case 'danhsach':
                require_once 'admin/danhsach.php';
                break;
            case 'logout':
                require_once 'logout.php';
                break;
                
            case 'createAccount':
                require_once 'createAccount.php';
                break;

            case 'them':
                require_once 'admin/them.php';
                break;
            
            case 'sua':
                require_once 'admin/sua.php';
                break;
            
            case 'xoa':
                require_once 'admin/xoa.php';    
                break;

            case 'danhsachTH':
                require_once 'admin/danhsachTH.php';
                break;
                    
            case 'themTH':
                require_once 'admin/themTH.php';
                break;
    
            case 'xoaTH':
                require_once 'admin/xoaTH.php';    
                break;

            case 'suaTH':
                require_once 'admin/suaTH.php';    
                break;
            
            case 'chitiet':
                require_once 'user/chitiet.php';    
                break;
            
            case 'home':
                require_once 'user/trangchu.php';
                break;

            case 'DienThoai':
                require_once 'user/DienThoai.php';
                break;

            case 'Laptop':
                require_once 'user/Laptop.php';
                break;

            case 'thuonghieu':
                require_once 'user/thuonghieu.php';
                break;

            case 'quantri':
                require_once 'admin/quantri.php';
                break;

            case 'LaptopTH':
                require_once 'user/LaptopTH.php';    
                break;

            case 'DienThoaiTH':
                require_once 'user/DienThoaiTH.php';    
                break;        
        }
    }else{
        require_once 'login.php';
    }

?>  