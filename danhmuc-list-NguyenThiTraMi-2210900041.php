<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang Quản lý danh mục - Danh sách danh mục</title>
    <link rel="stylesheet" href="./css/main-NguyenThiTraMi-2210900041.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <?php
        include("class/danhmuc_class-NguyenThiTraMi-2210900041.php");
        
        $danhmuc_nttm = new danhmuc;
        $show_danhmuc_nttm = $danhmuc_nttm ->show_danhmuc_nttm();
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
                            <li><a href="#">Danh sách danh mục</a></li>
                            <li><a href="danhmuc-add-NguyenThiTraMi-2210900041.php">Thêm danh mục</a></li>
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
            <div class="content-right-cartegory-list">
                <h1>Danh sách danh mục</h1>
                <table>
                    <tr>
                        <th>STT</th>
                        <th>Mã danh mục</th>
                        <th>Tên danh mục</th>
                        <th>Chức năng</th>
                    </tr>
                    <?php
                        if($show_danhmuc_nttm){
                            $stt_nttm = 0;
                            while($result_nttm = $show_danhmuc_nttm->fetch_array()):
                                $stt_nttm++; 
                    ?>
                    <tr>
                        <td><?php echo $stt_nttm; ?></td>
                        <td><?php echo $result_nttm["DANHMUC_ID"]; ?></td>
                        <td><?php echo $result_nttm["DANHMUC_NAME"]; ?></td>
                        <td>
                            <a href="danhmuc-edit-NguyenThiTraMi-2210900041.php?danhmuc_id=<?php echo $result_nttm["DANHMUC_ID"]; ?>">
                            Sửa</a>
                            |
                            <a href="danhmuc-delete-NguyenThiTraMi-2210900041.php?danhmuc_id=<?php echo $result_nttm["DANHMUC_ID"]; ?>"
                            onclick="if(confirm('Bạn có muốn xóa không?')){return true;}else{return false;}" class="btnXoa">
                            Xóa</a>
                        </td>
                    </tr>
                    <?php
                            endwhile;
                        }
                    ?>
                </table>
            </div>
        </div>
   </section>
</body>
</html>