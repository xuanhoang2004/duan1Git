<div class="col-md-8">
    <h3>Danh sách danh mục sản phẩm</h3>
    <a href="index.php?act=adddm" class="btn btn-success">Thêm mới</a>
        <table class="table">
            <thead>
            
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên danh mục</th>
                    <th scope="col">Hành động</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($listdanhmuc as $danhmuc => $value) : ?>
                    <tr>
                        <th scope="row">
                            <?php echo $danhmuc + 1; ?>
                        </th>
                        <td>
                            <?php echo $value['name']; ?>
                        </td>
                        <td>
                            <a href="?act=editdm&id=<?php echo $value['id'] ?>" class="btn btn-warning">Sửa</a>
                            <a iddm="<?=$value['id']?>" class="xoa">
                                <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalDelete">
                                    Xóa
                                </button>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
             </tbody>

         </table>
<script>
    let xoa = document.querySelectorAll('.btn-danger');
    xoa.forEach(function(item) {
        item.addEventListener('click', function() {
            let iddm=item.parentElement.getAttribute('iddm');
            let link = "?act=deletedm&id="+iddm;
            let check = confirm("bạn chắc chắn muốn xóa không");
            if (check) {
                item.parentElement.setAttribute('href', link);
            }

        })
    })
</script>
