<div class="panel panel-primary">
    <div class="panel-heading">Quản lý Mục Con</div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">STT</th>
                    <th class="text-center">Tên Menu</th>
                    <th class="text-center">Mã Menu</th>
                    <th class="text-center">Tên Menu Cha</th>
                    <th class="text-center">Vị Trí</th>
                    <th class="text-center">Ảnh</th>
                    <th class="text-center">Nội Dung</th>
                    <th class="text-center">liên kết</th>
                    <th class="text-center">Cập nhật</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'kenoi_csdl.php';
                $lietke_sql = "SELECT * FROM muc_con order by id";
                $kp = mysqli_query($conn, $lietke_sql);
                $stt = 1;
                while ($r = mysqli_fetch_assoc($kp)) {
                    $update = $r;
                ?>
                    <tr>
                        <td class="text-center"><?php echo $stt ?></td>
                        <td><?php echo $r['ten_muccon'] ?></td>
                        <td><?php echo $r['ma_muccon'] ?></td>
                        <td><?php echo $r['id_muccha'] ?></td>
                        <td><?php echo $r['vi_tri'] ?></td>
                        <td style="width:120px;height:100px;"><img src="<?php echo $r['link_anh']; ?>" alt="" style="width:100%;height:100%;"></td>
                        <td><?php echo $r['noi_dung'] ?></td>
                        <td><?php echo $r['lien_ket'] ?></td>

                        <td class="text-center">
                            <a class='btn btn-info btn-sm can_icon' onclick="sendidmuccon('<?php echo $r['id']; ?>')">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </a>
                            <a href="xoa_bg.php?mucconid=<?php echo $r['id']; ?>" type="button" class="btn btn-danger btn-sm can_icon">
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
    async function sendidmuccon(xid) {
        var myForm = $("#myform"); // sử dụng jQuery để chọn phần tử
        myForm.append('<input type="hidden" name="myvariable5" id="myvariable5" value="' + xid + '">'); // thêm input vào biểu mẫu
        event.preventDefault(); // ngăn chặn trang được tải lại
        $.post("sua_menu.php", myForm.serialize(), function(data) {
            // đặt nội dung của phần tử #myModal_2 bằng dữ liệu trả về từ yêu cầu AJAX
            $("#edit_muc_con").html(data);
            console.log(data);
            $("#edit_muc_con").css("display", "inline");
            //console.log($("#sua_menu_cha").html());
            // hiển thị modal
            $("#sua_muc_con").modal('show');
        });

    }

    
</script>