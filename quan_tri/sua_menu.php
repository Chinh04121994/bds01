<div id="edit_menu_cha">
    <?php

    if (isset($_POST['myvariable2'])) {
        $id = $_POST['myvariable2'];
        require_once 'kenoi_csdl.php';
        $edit_sql = "SELECT * FROM menu_cha WHERE id = $id";
        //echo $edit_sql;
        $kq = mysqli_query($conn, $edit_sql);
        $row = mysqli_fetch_assoc($kq);
    ?>
        <div class="modal fade" id="sua_menu_cha" role="dialog">
            <div class="modal-dialog modal-md">
                <form action="menu_cha.php" name="form1" method="post" enctype="multipart/form-data">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="modal-title">sửa menu cha</div>
                        </div>
                        <!-------------------------->
                        <div class="modal-body">
                            <div class="form-group" style="display:none">
                                <label for="ided"> tên menu cha</label>
                                <input class="form-control input-sm" id="ided" type="text" placeholder="tên menu" name="ided" value="<?php echo $id ?>">
                            </div>
                            <div class="form-group">
                                <label for="ten_mnc1"> tên menu cha</label>
                                <input class="form-control input-sm" id="ten_nmc1" type="text" placeholder="tên menu" name="ten_mnc1" value="<?php echo $row['ten_menucha'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="ma_mnc1"> mã menu cha</label>
                                <input class="form-control input-sm" id="ma_mnc1" type="text" placeholder="mã menu" name="ma_mnc1" value="<?php echo $row['ma_menucha'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="lk_mnc1">liên kết</label>
                                <input class="form-control input-sm" id="lk_mnc1" type="text" placeholder="liên kết" name="lk_mnc1" value="<?php echo $row['lien_ket'] ?>">
                            </div>

                        </div>
                        <!-------------------------->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" name="edit">Lưu dữ liệu</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng hộp thoại</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
<div id="edit_menu_con">
    <?php

    if (isset($_POST['myvariable3'])) {
        $id = $_POST['myvariable3'];
        require_once 'kenoi_csdl.php';
        $edit_sql = "SELECT * FROM menu_con WHERE id = $id";
        //echo $edit_sql;
        $kq = mysqli_query($conn, $edit_sql);
        $row = mysqli_fetch_assoc($kq);
    ?>
        <div class="modal fade" id="sua_menu_con" role="dialog">
            <div class="modal-dialog modal-md">
                <form action="menu_cha.php" name="form1" method="post" enctype="multipart/form-data">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="modal-title">sửa menu con</div>
                        </div>
                        <!-------------------------->
                        <div class="modal-body">
                            <div class="form-group" style="display:none">
                                <label for="ided1"> tên menu con</label>
                                <input class="form-control input-sm" id="ided1" type="text" placeholder="tên menu" name="ided1" value="<?php echo $id ?>">
                            </div>
                            <div class="form-group">
                                <label for="ten_mnc1"> tên menu con</label>
                                <input class="form-control input-sm" id="ten_nmc2" type="text" placeholder="tên menu" name="ten_mnc2" value="<?php echo $row['ten_menucon'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="ma_mnc1"> mã menu con</label>
                                <input class="form-control input-sm" id="ma_mnc2" type="text" placeholder="mã menu" name="ma_mnc2" value="<?php echo $row['ma_menucon'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="id_mnc1">id menu cha</label><br>
                                <select name="id_mnc1" id="id_mnc1">
                                    <?php
                                    //require_once 'kenoi_csdl.php';
                                    $sql = "SELECT * FROM menu_cha";
                                    $kq2 = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($kq2) > 0) {
                                        while ($row2 = mysqli_fetch_assoc($kq2)) {
                                            $value = $row2['id'];
                                            $default_value = $row['id_menucha'];
                                            $text = $row2['ten_menucha'];
                                            $selected = ($value == $default_value) ? "selected" : "";
                                            echo "<option value='$value' $selected>$text</option>";
                                        }
                                    }

                                    ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="lk_mnc2">liên kết</label>
                                <input class="form-control input-sm" id="lk_mnc2" type="text" placeholder="liên kết" name="lk_mnc2" value="<?php echo $row['lien_ket'] ?>">
                            </div>
                                    
                        </div>
                        <!-------------------------->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" name="edit_menucon">Lưu dữ liệu</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng hộp thoại</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
<div id="edit_muc_cha">
    <?php

    if (isset($_POST['myvariable4'])) {
        $id = $_POST['myvariable4'];
        require_once 'kenoi_csdl.php';
        $edit_sql = "SELECT * FROM muc_cha WHERE id = $id";
        //echo $edit_sql;
        $kq = mysqli_query($conn, $edit_sql);
        $row = mysqli_fetch_assoc($kq);
    ?>
        <div class="modal fade" id="sua_muc_cha" role="dialog">
            <div class="modal-dialog modal-md">
                <form action="menu_cha.php" name="form1" method="post" enctype="multipart/form-data">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="modal-title">sửa mục cha</div>
                        </div>
                        <!-------------------------->
                        <div class="modal-body">
                            <div class="form-group" style="display:none">
                                <label for="ided"> tên mục cha</label>
                                <input class="form-control input-sm" id="ided" type="text" placeholder="tên menu" name="ided" value="<?php echo $id ?>">
                            </div>
                            <div class="form-group">
                                <label for="ten_mnc1"> tên mục cha</label>
                                <input class="form-control input-sm" id="ten_nmc1" type="text" placeholder="tên menu" name="ten_mnc1" value="<?php echo $row['ten_muccha'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="ma_mnc1"> mã mục cha</label>
                                <input class="form-control input-sm" id="ma_mnc1" type="text" placeholder="mã menu" name="ma_mnc1" value="<?php echo $row['ma_muccha'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="lk_mnc1">liên kết</label>
                                <input class="form-control input-sm" id="lk_mnc1" type="text" placeholder="liên kết" name="lk_mnc1" value="<?php echo $row['lien_ket'] ?>">
                            </div>

                        </div>
                        <!-------------------------->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" name="edit_muccha">Lưu dữ liệu</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng hộp thoại</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
<div id="edit_muc_con">
    <?php

    if (isset($_POST['myvariable5'])) {
        $id = $_POST['myvariable5'];
        require_once 'kenoi_csdl.php';
        $edit_sql = "SELECT * FROM muc_con WHERE id = $id";
        //echo $edit_sql;
        $kq = mysqli_query($conn, $edit_sql);
        $row = mysqli_fetch_assoc($kq);
    ?>
        <div class="modal fade" id="sua_muc_con" role="dialog">
            <div class="modal-dialog modal-md">
                <form action="menu_cha.php" name="form1" method="post" enctype="multipart/form-data">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="modal-title">sửa mục con</div>
                        </div>
                        <!-------------------------->
                        <div class="modal-body">
                            <div class="form-group" style="display:none">
                                <label for="ided1"> tên menu cha</label>
                                <input class="form-control input-sm" id="ided1" type="text" placeholder="tên menu" name="ided1" value="<?php echo $id ?>">
                            </div>
                            <div class="form-group">
                                <label for="ten_mnc1"> tên mục con</label>
                                <input class="form-control input-sm" id="ten_nmc2" type="text" placeholder="tên mục" name="ten_mnc2" value="<?php echo $row['ten_muccon'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="ma_mnc1"> mã mục con</label>
                                <input class="form-control input-sm" id="ma_mnc2" type="text" placeholder="mã mục" name="ma_mnc2" value="<?php echo $row['ma_muccon'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="id_mnc1"> tên muc cha</label><br>
                                <select name="id_mnc1" id="id_mnc1">
                                    <?php
                                    //require_once 'kenoi_csdl.php';
                                    $sql = "SELECT * FROM muc_cha";
                                    $kq2 = mysqli_query($conn, $sql);
                                    if (mysqli_num_rows($kq2) > 0) {
                                        while ($row2 = mysqli_fetch_assoc($kq2)) {
                                            $value = $row2['id'];
                                            $default_value = $row['id_muccha'];
                                            $text = $row2['ten_muccha'];
                                            $selected = ($value == $default_value) ? "selected" : "";
                                            echo "<option value='$value' $selected>$text</option>";
                                        }
                                    }

                                    ?>
                                </select>

                            </div>
                            <div class="form-group">
                                <label for="diachi_mnc2">địa chỉ</label>
                                <input class="form-control input-sm" id="diachi_mnc2" type="text" placeholder="vị trí" name="vi_tri" value="<?php echo $row['vi_tri'] ?>">
                            </div>
                            <div class="form-group" style="display: none">
                                <label for="du_phong">địa chỉ</label>
                                <input class="form-control input-sm" id="du_phong" type="text" placeholder="duphong" name="du_phong" value="<?php echo $row['link_anh'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="link_mnc3">link ảnh</label>
                                <input class="form-control input-sm" id="link_mnc3" type="file" accept=".jpg,.jpeg,.png,.gif" placeholder="link ảnh" name="link_anh">
                            </div>
                            <div class="form-group">
                                <label for="noidung_mnc2">Nội dung</label>
                                <input class="form-control input-sm" id="noidung_mnc2" type="text" placeholder="link ảnh" name="noi_dung" value="<?php echo $row['noi_dung'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="lk_mnc2">liên kết</label>
                                <input class="form-control input-sm" id="lk_mnc2" type="text" placeholder="liên kết" name="lk_mnc2" value="<?php echo $row['lien_ket'] ?>">
                            </div>
                                    
                        </div>
                        <!-------------------------->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" name="edit_muccon">Lưu dữ liệu</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng hộp thoại</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
<div id="edit_banner">
    <?php

    if (isset($_POST['myvariable6'])) {
        $id = $_POST['myvariable6'];
        require_once 'kenoi_csdl.php';
        $edit_sql = "SELECT * FROM banner WHERE id = $id";
        //echo $edit_sql;
        $kq = mysqli_query($conn, $edit_sql);
        $row = mysqli_fetch_assoc($kq);
    ?>
        <div class="modal fade" id="sua_banner" role="dialog">
            <div class="modal-dialog modal-md">
                <form action="menu_cha.php" name="form1" method="post" enctype="multipart/form-data">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="modal-title">sửa banner</div>
                        </div>
                        <!-------------------------->
                        <div class="modal-body">
                            <div class="form-group" style="display:none">
                                <label for="ided1"> tên menu cha</label>
                                <input class="form-control input-sm" id="idbn" type="text" placeholder="tên menu" name="idbn" value="<?php echo $id ?>">
                            </div>
                            <div class="form-group" style="display: none">
                                <label for="du_phong">địa chỉ</label>
                                <input class="form-control input-sm" id="du_phong1" type="text" placeholder="duphong" name="du_phong1" value="<?php echo $row['link_anh'] ?>">
                            </div>
                            <div class="form-group" style="display: none">
                                <label for="du_phong">địa chỉ</label>
                                <input class="form-control input-sm" id="du_phong2" type="text" placeholder="duphong" name="du_phong2" value="<?php echo $row['du_phong'] ?>">
                            </div>
                            <div class="form-group">
                                <label for="file">link ảnh</label>
                                <input class="form-control input-sm" id="link_banner" type="file" accept=".jpg,.jpeg,.png,.gif" placeholder="link ảnh" name="file[]">
                            </div>
                            <div class="form-group">
                                <label for="file">link dự phòng</label>
                                <input class="form-control input-sm" id="link_banner_dp" type="file" accept=".jpg,.jpeg,.png,.gif" placeholder="link ảnh" name="file[]">
                            </div>
                                    
                        </div>
                        <!-------------------------->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" name="edit_banner">Lưu dữ liệu</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng hộp thoại</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>
