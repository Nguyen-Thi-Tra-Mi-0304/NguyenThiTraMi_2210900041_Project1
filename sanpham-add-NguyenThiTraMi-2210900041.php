<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản lý loại sản phẩm</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/main-NguyenThiTraMi-2210900041.css">
    <style>
        .content-right-product-add {
            margin-top: 20px;
        }
        .content-right-product-add h1 {
            margin-bottom: 12px;
        }
        .content-right-product-add input {
            height: 30px;
            width: 500px;
            display: block;
            margin: 12px 21px;
            padding-left: 12px;
        }
        .content-right-product-add select {
            height: 30px;
            width: 240px;
            margin-left: 20px;
            margin-bottom: 12px;
        }
        .content-right-product-add textarea {
            margin: 20px 21px 12px 21px;
            display: block;
            padding: 12px;
        }
        .content-right-product-add button {
            display: block;
            margin-top: 12px;
            height: 35px;
            width: 100px;
            cursor: pointer;
            background-color: #C62128;
            color: #fff;
            border: 1px solid #C62128;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
    </style>
</head>
<body>
    <?php
        include("class/sanpham_class-NguyenThiTraMi-2210900041.php");
        
        $sp_nttm = new sanpham;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            // var_dump($_POST,$_FILES);
            // echo "<pre>";
            // echo print_r($_FILES["SP_IMG_DESC"]["name"]);
            // echo "</pre>";
            $insert_sp_nttm = $sp_nttm -> insert_sp_nttm($_POST,$_FILES);
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
                    <li><a href="#"><i class="fa fa-rocket" aria-hidden="true"></i></i><span>Quản lý loại sản phẩm</span></a></li>
                    <li class="active"><a href="sanpham-NguyenThiTraMi-2210900041.php"><i class="fa fa-product-hunt" aria-hidden="true"></i></i><span>Quản lý sản phẩm</span></a>
                        <ul class="content-left-menu-list-submenu">
                            <li><a href="sanpham-list-NguyenThiTraMi-2210900041.php">Danh sách sản phẩm</a></li>
                            <li><a href="#">Thêm sản phẩm</a></li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-address-book" aria-hidden="true"></i><span>Quản lý nhân viên</span></a></li>
                    <li><a href="#"><i class="fa fa-comments" aria-hidden="true"></i><span>Quản lý bình luận</span></a></li>
                    <li><a href="#"><i class="fa fa-newspaper-o" aria-hidden="true"></i><span>Quản lý tin tức</span></a></li>
                </ul>
            </div>
        </div>
        <div class="content-right" style="width: 70%; padding: 12px 12px;">
            <div class="content-right-title">
                <h1>Quản lí sản phẩm</h1>
            </div>
            <div class="content-right-product-add">
                <h1>Thêm sản phẩm</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <label for="">Nhập tên sản phẩm <span style="color: red;">*</span>:</label>
                    <input type="text" required name="SP_NAME">
                    <select name="DANHMUC_ID" id="DANHMUC_ID">
                        <option value="#">--Chọn danh mục--</option>
                        <?php
                        $show_danhmuc = $sp_nttm->show_danhmuc_nttm();
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
                    </select>
                    <select name="LSP_ID" id="LSP_ID">
                        <option value="#">--Chọn loại sản phẩm--</option>
                        
                    </select> <br>
                    <label for="">Giá sản phẩm<span style="color: red;">*</span>:</label>
                    <input type="text" required name="SP_PRICE">
                    <label for="">Giá khuyến mãi<span style="color: red;">*</span>:</label>
                    <input type="text" required name="SP_PRICE_NEW">
                    <label for="">Mô tả sản phẩm<span style="color: red;">*</span>:</label> <br>
                    <textarea name="SP_DESC" id="" cols="69" rows="10"></textarea>
                    <label for="">Ảnh sản phẩm<span style="color: red;">*</span>:</label> <br>
                    <input type="file" required name="SP_IMG">
                    <label for="">Ảnh mô tả<span style="color: red;">*</span>:</label> <br>
                    <input multiple type="file" required name="SP_IMG_DESC[]">
                    <button type="submit">Thêm</button>
                </form>
            </div>
        </div>
   </section>
</body>
</html>