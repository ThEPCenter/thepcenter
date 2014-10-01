<?php
$center_code = $_GET['center_code'];
?>

<div class="form-group">
    <div class="col-sm-2 control-label"><h3>ห้องปฏิบัติการวิจัย</h3></div>
    <div class="col-sm-10">
        <select class="form-control" name="re_lab_code" id="re_lab_code">
            <?php
            $sql = "SELECT * FROM tb_re_lab;";
            $result = mysql_query($sql);
            while ($row = mysql_fetch_object($result)) {
                echo '<option value="' . $row->re_lab_code . '">' . $row->re_lab_th . '</option>';
            }
            ?>
        </select>                            
    </div>
</div>
