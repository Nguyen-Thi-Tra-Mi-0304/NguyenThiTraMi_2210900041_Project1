<?php
    include("class/loaisanpham_class-NguyenThiTraMi-2210900041.php");
        
    $lsp_nttm = new loaisanpham;
    
    $lsp_id_nttm = $_GET["lsp_id"];
    $delete_lsp_nttm = $lsp_nttm->delete_lsp_nttm($lsp_id_nttm);
    
?>