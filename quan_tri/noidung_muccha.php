<div class="panel panel-primary">
    <div class="panel-heading">Quản lý Mục Cha</div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">STT</th>
                    <th class="text-center">Tên Mục</th>
                    <th class="text-center">Mã Mục</th>
                    <th class="text-center">liên kết</th>
                    <th class="text-center">Cập nhật</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'kenoi_csdl.php';
                $lietke_sql = "SELECT * FROM muc_cha order by id";
                $kp = mysqli_query($conn, $lietke_sql);
                $stt = 1;
                while ($r = mysqli_fetch_assoc($kp)) {
                    $update = $r;
                ?>
                    <tr>
                        <td class="text-center"><?php echo $stt ?></td>
                        <td><?php echo $r['ten_muccha'] ?></td>
                        <td><?php echo $r['ma_muccha'] ?></td>
                        <td><?php echo $r['lien_ket'] ?></td>

                        <td class="text-center">
                            <a class='btn btn-info btn-sm can_icon' onclick="sendidmuc('<?php echo $r['id']; ?>')">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a href="xoa_bg.php?mucid=<?php echo $r['id']; ?>" type="button" class="btn btn-danger btn-sm can_icon">
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
    async function sendidmuc(xid) {
        var myForm = $("#myform"); // sử dụng jQuery để chọn phần tử
        myForm.append('<input type="hidden" name="myvariable4" id="myvariable4" value="' + xid + '">'); // thêm input vào biểu mẫu
        event.preventDefault(); // ngăn chặn trang được tải lại
        $.post("sua_menu.php", myForm.serialize(), function(data) {
            // đặt nội dung của phần tử #myModal_2 bằng dữ liệu trả về từ yêu cầu AJAX
            $("#edit_muc_cha").html(data);
            //console.log(data);
            $("#edit_muc_cha").css("display", "inline");
            //console.log($("#sua_menu_cha").html());
            // hiển thị modal
            $("#sua_muc_cha").modal('show');
        });

    }

  
</script>