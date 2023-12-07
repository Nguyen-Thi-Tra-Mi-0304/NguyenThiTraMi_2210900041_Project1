<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản lý danh mục - Sửa danh mục</title>
    <link rel="stylesheet" href="./css/main-NguyenThiTraMi-2210900041.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        include("class/danhmuc_class-NguyenThiTraMi-2210900041.php");
        
        $danhmuc_nttm = new danhmuc;
        
        $danhmuc_id_nttm = $_GET["danhmuc_id"];
        $edit_danhmuc_nttm = $danhmuc_nttm->edit_danhmuc_nttm($danhmuc_id_nttm);
        if($edit_danhmuc_nttm){
            $result_nttm = $edit_danhmuc_nttm->fetch_array();
        }
    ?>
    <?php
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $DANHMUC_NAME = $_POST["DANHMUC_NAME"];
            $update_danhmuc_nttm = $danhmuc_nttm -> update_danhmuc_nttm($DANHMUC_NAME,$danhmuc_id_nttm);
        }
    ?>
        
   <section id="admin-content">
        <div class="content-left">
            <div class="content-left-logo">
                <a href="admin-NguyenThiTraMi-2210900041.html"><img src="./image/fahasa-logo.png" alt="logo"></a>
                <h2>Xin chào, Nguyễn Thị Trà Mi!</h2>
                <h2>Chúc bạn một ngày mới tốt lành &#9786;</h2>
            </div>
            <div class="content-left-menu">
                <ul class="content-left-menu-list">
                    <li><a href="admin-NguyenThiTraMi-2210900041.php"><span>Bảng điều kiển</span></a></li>
                    <li><a href="#"><i class="fa fa-users" aria-hidden="true"></i><span>Quản lý khách hàng</span></a></li>
                    <li class="active"><a href="danhmuc-NguyenThiTraMi-2210900041.php"><i class="fa fa-bars" aria-hidden="true"></i><span>Quản lý danh mục</span></a>
                        <ul class="content-left-menu-list-submenu">
                            <li><a href="danhmuc-list-NguyenThiTraMi-2210900041.php">Danh sách danh mục</a></li>
                            <li><a href="#">Thêm danh mục</a></li>
                        </ul>
                    </li>
                    <li><a href="loaisanpham-NguyenThiTraMi-2210900041.php"><i class="fa fa-rocket" aria-hidden="true"></i><span>Quản lý loại sản phẩm</span></a></li>
                    <li><a href="sanpham-NguyenThiTraMi-2210900041.php"><i class="fa fa-product-hunt" aria-hidden="true"></i><span>Quản lý sản phẩm</span></a></li>
                    <li><a href="#"><i class="fa fa-address-book" aria-hidden="true"></i><span>Quản lý nhân viên</span></a></li>
                    <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i><span>Quản lý bình luận</span></a></li>
                    <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span>Quản lý tin tức</span></a></li>
                </ul>
            </div>
        </div>
        <div class="content-right" style="width: 70%; padding: 12px 12px;">
            <div class="content-right-title">
                <h1>Quản lí danh mục</h1>
            </div>
            <div class="content-right-cartegory-add">
                <h1>Thêm danh mục</h1>
                <form action="" method="post">
                    <input required type="text" name="DANHMUC_NAME" placeholder="Nhập tên danh mục"
                    value="<?php echo $result_nttm["DANHMUC_NAME"]; ?>">
                    <button type="submit">Sửa</button>
                </form>
            </div>
        </div>
   </section>
</body>
</html>