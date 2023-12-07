<?php
    include("database-NguyenThiTraMi-2210900041.php");
?>

<?php
    class loaisanpham {
        private $db_ntm;

        public function __construct(){
            $this -> db_ntm = new Database();
        }
        // chèn dữ liệu bảng danh mục
        public function insert_danhmuc_nttm($DANHMUC_NAME) {
            $insert_query_nttm = "INSERT INTO tbl_danhmuc (DANHMUC_NAME) VALUES ('$DANHMUC_NAME')";
            $res_insert_nttm = $this->db_ntm->insert($insert_query_nttm);
            header("Location: danhmuc-list-NguyenThiTraMi-2210900041.php");
            return $res_insert_nttm;
        }

        // Hiện dữ liệu bảng danh mục
         public function show_danhmuc_nttm(){
            $show_query_nttm = "SELECT * FROM tbl_danhmuc ORDER BY DANHMUC_ID ASC";
            $res_show_nttm = $this ->db_ntm->select($show_query_nttm);
            return $res_show_nttm;
        }

        // chèn dữ liệu bảng 
        public function insert_lsp_nttm($DANHMUC_ID,$LSP_NAME) {
            $insert_query_lsp_nttm = "INSERT INTO tbl_loaisanpham (DANHMUC_ID,LSP_NAME) 
            VALUES ('$DANHMUC_ID','$LSP_NAME')";
            $res_insert_lsp_nttm = $this->db_ntm->insert($insert_query_lsp_nttm);
            header("Location: loaisanpham-list-NguyenThiTraMi-2210900041.php");
            return $res_insert_lsp_nttm;
        }

        // Hiện dữ liệu bảng 
        public function show_lsp_nttm(){
            // $show_query_nttm = "SELECT * FROM tbl_loaisanpham ORDER BY LSP_ID ASC";

            // Hiển thị tên danh mục dựa trên id danh mục 
            $show_query_nttm = "SELECT tbl_loaisanpham.*, tbl_danhmuc.DANHMUC_NAME FROM tbl_loaisanpham INNER JOIN tbl_danhmuc 
            ON tbl_loaisanpham.DANHMUC_ID = tbl_danhmuc.DANHMUC_ID ORDER BY tbl_loaisanpham.DANHMUC_ID ASC";
            $res_show_nttm = $this ->db_ntm->select($show_query_nttm);
            return $res_show_nttm;
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