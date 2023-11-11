<?php
    function insert_danhmuc($tenloai){
        $sql="INSERT INTO danhmuc(name) values('$tenloai')";
        pdo_execute($sql);
    }
    function loadall_danhmuc(){
        $sql="SELECT * FROM danhmuc ORDER BY id desc";
           $listdanhmuc=pdo_query($sql);
           return $listdanhmuc;
    }
?>