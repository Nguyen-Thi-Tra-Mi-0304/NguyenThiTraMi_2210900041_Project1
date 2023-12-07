<?php
    include("database-NguyenThiTraMi-2210900041.php");
?>

<?php
    class sanpham {
        private $db_nttm;

        public function __construct(){
            $this -> db_nttm = new Database();
        }

        // Hiện dữ liệu bảng danh mục
         public function show_danhmuc_nttm(){
            $show_query_nttm = "SELECT * FROM tbl_danhmuc ORDER BY DANHMUC_ID ASC";
            $res_show_nttm = $this ->db_nttm->select($show_query_nttm);
            return $res_show_nttm;
        }
        // Hiện dữ liệu bảng loại sản phẩm
        public function show_lsp_nttm(){
            $show_query_nttm = "SELECT * FROM tbl_loaisanpham ORDER BY LSP_ID ASC";  
            $res_show_nttm = $this ->db_nttm->select($show_query_nttm);
            return $res_show_nttm;
        }

        public function show_lsp_ajax($DANHMUC_ID){
            $show_query_nttm = "SELECT * FROM tbl_loaisanpham WHERE DANHMUC_ID = '$DANHMUC_ID' ";  
            $res_show_nttm = $this ->db_nttm->select($show_query_nttm);
            return $res_show_nttm;
        }

        // chèn dữ liệu bảng 
        public function insert_sp_nttm() {
            // $SP_ID = $_POST["SP_ID"];
            $SP_NAME = $_POST["SP_NAME"];
            $DANHMUC_ID = $_POST["DANHMUC_ID"];
            $LSP_ID = $_POST["LSP_ID"];
            $SP_PRICE = $_POST["SP_PRICE"];
            $SP_PRICE_NEW = $_POST["SP_PRICE_NEW"];
            $SP_DESC = $_POST["SP_DESC"];
            $SP_IMG = $_FILES["SP_IMG"]["name"];

            // hiển hình ảnh trong database
            move_uploaded_file($_FILES["SP_IMG"]["tmp_name"],"uploads/".$_FILES["SP_IMG"]["name"]);
        
            $insert_query_nttm = "INSERT INTO tbl_sanpham (SP_NAME,DANHMUC_ID,LSP_ID,SP_PRICE,SP_PRICE_NEW,SP_DESC,SP_IMG) 
            VALUES ('$SP_NAME','$DANHMUC_ID','$LSP_ID','$SP_PRICE','$SP_PRICE_NEW','$SP_DESC','$SP_IMG')";
            $res_insert_nttm = $this->db_nttm->insert($insert_query_nttm);

            if($res_insert_nttm){
                $query_nttm = "SELECT * FROM tbl_sanpham ORDER BY SP_ID DESC LIMIT 1";
                $res_nttm = $this ->db_nttm->select($query_nttm)->fetch_array();
                $SP_ID = $res_nttm["SP_ID"];
                $filename_nttm = $_FILES["SP_IMG_DESC"]["name"];
                $filetmp = $_FILES["SP_IMG_DESC"]["tmp_name"];

                foreach ($filename_nttm as $key => $value)
                {
                    move_uploaded_file($filetmp["$key"],"uploads/".$value);
                    $query_img_nttm = "INSERT INTO tbl_sanpham_img_desc	(SP_ID,SP_IMG_DESC) VALUES ('$SP_ID','$value')";
                    $res_img_nttm = $this ->db_nttm->insert($query_img_nttm);
                }
            }
            // header("Location: loaisanpham-list-NguyenThiTraMi-2210900041.php");
            return $res_insert_nttm;
        }

        

        // Sửa dữ liệu 
        public function edit_lsp_nttm($lsp_id_nttm) {
            $edit_query_nttm = "SELECT * FROM tbl_loaisanpham WHERE LSP_ID = '$lsp_id_nttm' ";
            $res_edit_nttm = $this ->db_ntm->select($edit_query_nttm);
            return $res_edit_nttm;
        }
        public function update_lsp_nttm($DANHMUC_ID,$LSP_NAME,$lsp_id_nttm) {
            $res_update_nttm = "UPDATE tbl_loaisanpham SET LSP_NAME = '$LSP_NAME', DANHMUC_ID ='$DANHMUC_ID'
            WHERE LSP_ID = '$lsp_id_nttm'";
            $res_update_nttm = $this ->db_ntm->update($res_update_nttm);
            header("Location: loaisanpham-list-NguyenThiTraMi-2210900041.php");
            return $res_update_nttm;
        }

        // Xóa dữ liệu 
        public function delete_lsp_nttm($lsp_id_nttm) {
            $delete_query_nttm = "DELETE FROM tbl_loaisanpham WHERE LSP_ID = '$lsp_id_nttm' ";
            $res_delete_nttm = $this ->db_ntm->delete($delete_query_nttm);
            header("Location: loaisanpham-list-NguyenThiTraMi-2210900041.php");
            return $res_delete_nttm;
        }
    }
?>