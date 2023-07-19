<div id="id01" class="modal1" style="display: block;">
    <div class="modal-content1 animate">
        <form action="index.php" name="form_dn" method="post" enctype="multipart/form-data">
            <div class="panel panel-primary" style="padding-bottom: 15px;">
                <div class="panel-heading">
                    <div class="modal-title"><b><i class="glyphicon glyphicon-user"></i> Đăng nhập tài khoản</b></div>
                </div>
                <div class="modal-body">
                    <div class="input-group" style="margin: 10px; padding-bottom:10px;">
                        <span class="input-group-addon" style="color: rgb(41, 122, 207, 0.9);">
                            <i class="glyphicon glyphicon-user"></i>
                        </span>
                        <input id="user" type="text" class="form-control" name="user" placeholder="Tên đăng nhập">
                    </div>
                    <div class="input-group" style="margin: 10px; padding-bottom:10px;">
                        <span class="input-group-addon" style="color: rgb(41, 122, 207, 0.9);">
                            <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        <input id="pass" type="password" class="form-control" name="pass" placeholder="Mật khẩu">
                    </div>
                    <div style="margin: 10px; color: rgb(41, 122, 207, 0.9);">
                        <input type="checkbox" onclick="myFunction()"> Hiển thị mật khẩu
                        <script>
                            function myFunction() {
                                var x = document.getElementById("pass");
                                if (x.type === "text") {
                                    x.type = "password";
                                } else {
                                    x.type = "text";
                                }
                            }
                        </script>
                    </div>
                </div>
                <div class="text-right" style="padding:0px 30px;">
                    <button type="submit" class="btn btn-primary" name="DANGNHAP" style="margin-right: 10px;">Đăng nhập</button>
                    <button type="reset" class="btn btn-primary">Bỏ qua</button>
                </div>
            </div>

        </form>
    </div>
</div>