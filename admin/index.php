<?php
 include "header.php";
 include "../model/pdo.php";
 include "../model/danhmuc.php";

 //controller
if(isset($_GET['act'])){
    $act=$_GET['act'];
    switch ($act) {
        case 'listdm':
            $listdanhmuc=loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'adddm':
            //kiem tra xem ng dung co click vaof nut add hay k
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                $tenloai=$_POST['tenloai'];
                insert_danhmuc($tenloai);
                $thongbao="them thanh cong";
            }
            include "danhmuc/add.php";
            break;
        }
    }else{
        include "home.php";
    }

 include "footer.php";
?>