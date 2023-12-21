<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý slider</title>
    <link rel="stylesheet" href="./css/admin-NguyenThiTraMi-2210900041.css">
</head>
<body>
    <?php 
    include("./connect-NguyenThiTraMi.php");
    if(isset($_POST['Themslider'])) {
        $slider_image = $_FILES["slider_image"]["name"];
        $slider_image_tmp = $_FILES["slider_image"]["tmp_name"];
        move_uploaded_file($slider_image_tmp,'./uploads/'.$slider_image);
        $slider_order = $_POST["slider_order"];
        $slider_active = $_POST["slider_active"];

        $sql_insert_nttm = "INSERT INTO tbl_slider (`slider_image`, `slider_order`,`slider_active`) 
        VALUES ('$slider_image', '$slider_order','$slider_active');";
        if($conn_nttm->query($sql_insert_nttm)){
            header("Location: ./quanlyslider/slider-list-NguyenThiTraMi.php");
        }else {
            $error_message_nttm = "Lỗi thêm mới!".mysqli_errno($conn_nttm);
        }
    }          
    ?>
    <div class="admin-content">
        <div class="admin-content-left">
            <div class="admin-content-left-top">
                <img src="./img/fahasa-logo.png" alt="">
                <h3>Xin chào Nguyễn Thị Trà Mi</h3>
                <h3>Chúc bạn một ngày mới tốt lành &#9786;</h3>
            </div>
            <div class="admin-conent-left-bottom">
                <ul class="admin-content-left-menu">
                    <li><a href="admin-NguyenThiTraMi.php">Bảng điều khiến</a></li>
                    <li><a href="quanlydanhmuc-NguyenThiTraMi.php">Quản lý danh mục</a></li>
                    <li class="active"><a href="#">Quản lý slider</a></li>
                    <li><a href="quanlysanpham-NguyenThiTraMi.php">Quản lý sản phẩm</a></li>
                </ul>
            </div>  
        </div>
        <div class="admin-content-right">
            <div class="admin-content-right-title">
                <h1>Quản lý slider</h1>
            </div>
            <div class="admin-content-right-content">
                <a href="./quanlyslider/slider-list-NguyenThiTraMi.php" class="btn">Danh sách slider</a>
                <h1>Thêm slider</h1>
                <form action="" method="post" enctype="multipart/form-data">
                    <table style="width: 80%;">
                        <tr>
                            <td>Ảnh slider: </td>
                            <td><input required type="file" name="slider_image"></td>
                        </tr>
                        <tr>
                            <td><label for="slider_active">Tình trạng: </label></td>
                            <td>
                                <select name="slider_active">
                                    <option value="1">Hoạt động</option>
                                    <option value="0">Ngừng hoạt động</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" class="btn" name="Themslider" style="width: 100px;" value="Thêm"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>