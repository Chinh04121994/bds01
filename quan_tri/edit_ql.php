<div id="edit">
    <?php

    if (isset($_POST['myvariable'])) {
        $id = $_POST['myvariable'];
        require_once 'kenoi_csdl.php';
        $edit_sql = "SELECT * FROM tai_khoan WHERE id = $id";
        //echo $edit_sql;
        $kq = mysqli_query($conn, $edit_sql);
        $row = mysqli_fetch_assoc($kq);
    ?>
        <div class="modal fade" id="myModal_2" role="dialog">
            <div class="modal-dialog modal-md">
                <form action="sua_bg.php" name="form2" id="form2" method="post" enctype="multipart/form-data">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="modal-title">chỉnh sửa tài khoản</div>
                        </div>

                        <!-------------------------->
                        <div class="modal-body">
                            <div class="form-group" style="display:none">
                                <label for="id1">Họ và tên:</label>
                                <input class="form-control input-sm" id="id1" type="text" placeholder="Họ và tên" name="id1" value="<?php echo $id; ?>">
                            </div>
                            <div class="form-group">
                                <label for="hoten1">Họ và tên:</label>
                                <input class="form-control input-sm" id="hoten1" type="text" placeholder="Họ và tên" name="hoten1" value="<?php echo $row['hoten']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email1">Địa chỉ Email:</label>
                                <input class="form-control input-sm" id="email1" type="email" placeholder="Địa chỉ Email" name="email1" value="<?php echo $row['email']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="dienthoai1">Số điện thoại:</label>
                                <input class="form-control input-sm" id="dienthoai1" type="number" placeholder="Số điện thoại" name="dienthoai1" value="<?php echo $row['sdt']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="user1">Tên tài khoản:</label>
                                <input class="form-control input-sm" id="user1" type="text" placeholder="Tên tài khoản" name="user1" value="<?php echo $row['user']; ?>">
                            </div>
                            <div class="form-group">
                                <label for="pass1">Mật khẩu:</label>
                                <input class="form-control input-sm" id="pass1" type="password" placeholder="Mật khẩu" name="pass1" value="<?php echo $row['pass']; ?>">
                            </div>


                        </div>
                        <!-------------------------->
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-default" name="SAVE">Lưu dữ liệu</button>
                            <button type="button" class="btn btn-default" data-dismiss="modal">Đóng hộp thoại</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    <?php } ?>
</div>