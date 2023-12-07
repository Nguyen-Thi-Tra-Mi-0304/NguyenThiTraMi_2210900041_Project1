<?php
    include("./class/sanpham_class-NguyenThiTraMi-2210900041.php");
    $sp_nttm = new sanpham;
    $DANHMUC_ID = $_GET["DANHMUC_ID"];
?>


<?php
    $show_lsp_ajax = $sp_nttm->show_lsp_ajax($DANHMUC_ID);
    if($show_lsp_ajax){
        while($result_nttm = $show_lsp_ajax->fetch_array()):
?>
    <option value="<?php echo $result_nttm["LSP_ID"]; ?>">
        <?php echo $result_nttm["LSP_NAME"]; ?> 
    </option>
<?php
        endwhile;
    }                    
?>