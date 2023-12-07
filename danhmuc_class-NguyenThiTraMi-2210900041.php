<?php
    include("database-NguyenThiTraMi-2210900041.php");
?>

<?php
    class danhmuc {
        private $db_ntm;

        public function __construct(){
            $this -> db_ntm = new Database();
        }

        // chèn dữ liệu 
        public function insert_danhmuc_nttm($DANHMUC_NAME) {
            $insert_query_nttm = "INSERT INTO tbl_danhmuc (DANHMUC_NAME) VALUES ('$DANHMUC_NAME')";
            $res_insert_nttm = $this->db_ntm->insert($insert_query_nttm);
            header("Location: danhmuc-list-NguyenThiTraMi-2210900041.php");
            return $res_insert_nttm;
        }

        // Hiện dữ liệu 
        public function show_danhmuc_nttm(){
            $show_query_nttm = "SELECT * FROM tbl_danhmuc ORDER BY DANHMUC_ID ASC";
            $res_show_nttm = $this ->db_ntm->select($show_query_nttm);
            return $res_show_nttm;
        }

        // Sửa dữ liệu 
        public function edit_danhmuc_nttm($danhmuc_id_nttm) {
            $edit_query_nttm = "SELECT * FROM tbl_danhmuc WHERE DANHMUC_ID = '$danhmuc_id_nttm' ";
            $res_edit_nttm = $this ->db_ntm->select($edit_query_nttm);
            return $res_edit_nttm;
        }
        public function update_danhmuc_nttm($DANHMUC_NAME,$danhmuc_id_nttm) {
            $res_update_nttm = "UPDATE tbl_danhmuc SET DANHMUC_NAME = '$DANHMUC_NAME' WHERE DANHMUC_ID = '$danhmuc_id_nttm'";
            $res_update_nttm = $this ->db_ntm->update($res_update_nttm);
            header("Location: danhmuc-list-NguyenThiTraMi-2210900041.php");
            return $res_update_nttm;
        }

        // Xóa dữ liệu 
        public function delete_danhmuc_nttm($danhmuc_id_nttm) {
            $delete_query_nttm = "DELETE FROM tbl_danhmuc WHERE DANHMUC_ID = '$danhmuc_id_nttm' ";
            $res_delete_nttm = $this ->db_ntm->delete($delete_query_nttm);
            header("Location: danhmuc-list-NguyenThiTraMi-2210900041.php");
            return $res_delete_nttm;
        }
    }
?>