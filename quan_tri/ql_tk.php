<div class="panel panel-primary">
    <div class="panel-heading">Quản lý tài khoản người dùng</div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">STT</th>
                    <th class="text-center">Họ và tên</th>
                    <th class="text-center">Địa chỉ Email</th>
                    <th class="text-center">Điện thoại</th>
                    <th class="text-center">Tên tài khoản</th>
                    <th class="text-center">Mật khẩu</th>
                    <th class="text-center">Cập nhật</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'kenoi_csdl.php';
                $lietke_sql = "SELECT * FROM tai_khoan order by id";
                $kp = mysqli_query($conn, $lietke_sql);
                $stt = 1;
                while ($r = mysqli_fetch_assoc($kp)) {
                    $update = $r;
                ?>
                    <tr>
                        <td class="text-center"><?php echo $stt ?></td>
                        <td><?php echo $r['hoten'] ?></td>
                        <td><?php echo $r['email'] ?></td>
                        <td><?php echo $r['sdt'] ?></td>
                        <td><?php echo $r['user'] ?></td>
                        <td><?php echo $r['pass'] ?></td>

                        <td class="text-center">
                            <a class='btn btn-info btn-sm can_icon' onclick="sendid('<?php echo $r['id']; ?>')">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a href="xoa_bg.php?tkid=<?php echo $r['id']; ?>" type="button" class="btn btn-danger btn-sm can_icon">
                                <span class="glyphicon glyphicon-trash"></span>
                            </a>
                        </td>
                    </tr>
                <?php
                    $stt++;
                }
                ?>
            </tbody>
        </table>
    </div>
</div>

<form id="myform" method="post" action="">
</form>

<script>
    async function sendid(xid) {
        var myForm = $("#myform"); // sử dụng jQuery để chọn phần tử
        myForm.append('<input type="hidden" name="myvariable" id="myvariable" value="' + xid + '">'); // thêm input vào biểu mẫu
        event.preventDefault(); // ngăn chặn trang được tải lại
        $.post("edit_ql.php", myForm.serialize(), function(data) {
            // đặt nội dung của phần tử #myModal_2 bằng dữ liệu trả về từ yêu cầu AJAX
            $("#edit").html(data);
            $("#edit").css("display", "inline");
            console.log($("#myModal_2").html());
            // hiển thị modal
            $("#myModal_2").modal('show');
        });

    }

    

    
</script>