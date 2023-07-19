<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
        <form action="them_bg.php" name="form1" method="post" enctype="multipart/form-data">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <div class="modal-title">Đăng ký tài khoản</div>
                </div>
                <!-------------------------->
                <div class="modal-body">
                    <div class="form-group">
                        <label for="hoten">Họ và tên:</label>
                        <input class="form-control input-sm" id="hoten" type="text" placeholder="Họ và tên" name="hoten">
                    </div>
                    <div class="form-group">
                        <label for="email">Địa chỉ Email:</label>
                        <input class="form-control input-sm" id="email" type="email" placeholder="Địa chỉ Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="dienthoai">Số điện thoại:</label>
                        <input class="form-control input-sm" id="dienthoai" type="number" placeholder="Số điện thoại" name="dienthoai">
                    </div>
                    <div class="form-group">
                        <label for="user">Tên tài khoản:</label>
                        <input class="form-control input-sm" id="user" type="text" placeholder="Tên tài khoản" name="user">
                    </div>
                    <div class="form-group">
                        <label for="pass">Mật khẩu:</label>
                        <input class="form-control input-sm" id="pass" type="password" placeholder="Mật khẩu" name="pass">
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