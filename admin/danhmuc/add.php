<div class="col-md-8">
    <h3>Thêm danh mục sản phẩm mới</h3>
    <form method="post" action="index.php?act=adddm">
        <div class="mb-3">
            <label for="name" class="form-label">Tên danh mục</label>
            <input type="text" class="form-control" name="tenloai" placeholder="Nhập tên danh mục" />
        </div>
        <input type="submid" name="themmoi" value="THÊM MỚI"  style="background-color: #7B68EE; height: 30px; width: 90px;">
        <a href="index.php?act=listdm"><input  type="button" value="DANH SÁCH" style="background-color: #FF1493;  height: 30px;" ></a>
        <?php
           if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
           ?>
    </form>
</div>