<?php require_once '../config/db.php';?>

<?php
if(isset($_GET['page_layout'])){
        switch($_GET['page_layout']){
            // account
            case 'login':
                require_once 'login.php';
                break;
            case 'logout':
                require_once 'logout.php';
                break;
            case 'createAccount':
                require_once 'createAccount.php';
                break;
                

            case 'quantri':
                require_once 'quantri.php';
                break;

            case 'quanly':
                require_once 'quanly.php';    
                break;
                                //quan ly san pham
            case 'danhsach':
                require_once 'qlsanpham/danhsach.php';
                break;
            case 'them':
                require_once 'qlsanpham/them.php';
                break;
            case 'sua':
                require_once 'qlsanpham/sua.php';
                break;
            case 'xoa':
                require_once 'qlsanpham/xoa.php';    
                break;

            //quan ly thuong hieu
            case 'danhsachTH':
                require_once 'qlthuonghieu/danhsachTH.php';
                break;
            case 'themTH':
                require_once 'qlthuonghieu/themTH.php';
                break;
            case 'xoaTH':
                require_once 'qlthuonghieu/xoaTH.php';    
                break;
            case 'suaTH':
                require_once 'qlthuonghieu/suaTH.php';    
                break;
            
            //quan ly danh muc
            case 'danhsachdm':
                require_once 'qldanhmuc/danhsachdm.php';
                break;
            case 'themdm':
                require_once 'qldanhmuc/themdm.php';    
                break;
            case 'xoadm':
                require_once 'qldanhmuc/xoadm.php';    
                break;
            case 'suadm':
                require_once 'qldanhmuc/suadm.php';    
                break;

            }
        }else{
            require_once 'login.php';
        }
        
    ?> 