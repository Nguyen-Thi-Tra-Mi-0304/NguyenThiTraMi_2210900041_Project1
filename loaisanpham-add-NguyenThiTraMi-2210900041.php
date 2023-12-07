<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản lý loại sản phẩm - Thêm loại sản phẩm</title>
    <link rel="stylesheet" href="./css/main-NguyenThiTraMi-2210900041.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        select{
            height: 30px;
            width: 200px;
            margin-bottom: 12px;
        }
    </style>
</head>
<body>
<?php
        include("class/loaisanpham_class-NguyenThiTraMi-2210900041.php");
        
        $lsp_nttm = new loaisanpham;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $DANHMUC_ID = $_POST["DANHMUC_ID"];
            $LSP_NAME = $_POST["LSP_NAME"];
            $insert_lsp_nttm = $lsp_nttm -> insert_lsp_nttm($DANHMUC_ID,$LSP_NAME);
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
                    <li><a href="danhmuc-NguyenThiTraMi-2210900041.php"><i class="fa fa-bars" aria-hidden="true"></i><span>Quản lý danh mục</span></a></li>
                    <li class="active"><a href="loaisanpham-NguyenThiTraMi-2210900041.php"><i class="fa fa-rocket" aria-hidden="true"></i></i><span>Quản lý loại sản phẩm</span></a>
                        <ul class="content-left-menu-list-submenu">
                            <li><a href="loaisanpham-list-NguyenThiTraMi-2210900041.php">Danh sách loại sản phẩm</a></li>
                            <li><a href="#">Thêm loại sản phẩm</a></li>
                        </ul>
                    </li>
                    <li><a href="sanpham-NguyenThiTraMi-2210900041.php"><i class="fa fa-product-hunt" aria-hidden="true"></i></i><span>Quản lý sản phẩm</span></a></li>
                    <li><a href="#"><i class="fa fa-address-book" aria-hidden="true"></i><span>Quản lý nhân viên</span></a></li>
                    <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i><span>Quản lý bình luận</span></a></li>
                    <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span>Quản lý tin tức</span></a></li>
                </ul>
            </div>
        </div>
        <div class="content-right" style="width: 70%; padding: 12px 12px;">
            <div class="content-right-title">
                <h1>Quản lí loại sản phẩm</h1>
            </div>
            <div class="content-right-cartegory-add">
                <h1>Thêm loại sản phẩm</h1>
                <form action="" method="post">
                    <select name="DANHMUC_ID">
                        <option value="#">--Chọn danh mục--</option>
                        <?php
                        $show_danhmuc = $lsp_nttm->show_danhmuc_nttm();
                        if($show_danhmuc){
                            while($result_nttm = $show_danhmuc->fetch_array()):
                        ?>
                        <option value="<?php echo $result_nttm["DANHMUC_ID"]; ?>">
                            <?php echo $result_nttm["DANHMUC_NAME"]; ?> 
                        </option>
                        <?php
                            endwhile;
                        }
                        ?>
                    </select> <br>
                    <input required type="text" name="LSP_NAME" placeholder="Nhập tên loại sản phẩm">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
   </section>
</body>
</html>