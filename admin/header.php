<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="../view/css/style.css">
</head>

<body>
<div class="header bg-success text-light p-4 text-center">
    TRANG QUẢN LÝ ADMIN
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid" style="margin-bottom: 100px;">
        <a class="navbar-brand" href="index.php">Trang chủ</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php?act=listdm">Danh mục</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?act=listsp">Sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?act=dskh">Khách hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?act=listbill">Đơn hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?act=dsbl">Bình luận</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="index.php?act=thongke">Thống kê</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <!-- <script src="../assets/js/admin.js"></script> -->

</body>

</html>