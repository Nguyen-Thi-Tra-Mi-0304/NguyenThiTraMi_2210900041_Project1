<?php
    include("class/loaisanpham_class-NguyenThiTraMi-2210900041.php");
        
        $lsp_nttm = new loaisanpham;
    if(!isset($_GET["danhmuc_id"]) || $_GET["danhmuc_id"]==NULL){
        echo "<script>window.location = 'danhmuc-list-NguyenThiTraMi-2210900041.php'</script>";
    }else{
        $danhmuc_id_nttm = $_GET["danhmuc_id"];
    }
    $delete_danhmuc_nttm = $danhmuc_nttm->delete_danhmuc_nttm($danhmuc_id_nttm);
    
?>