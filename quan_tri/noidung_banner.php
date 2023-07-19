<div class="panel panel-primary">
    <div class="panel-heading">Quản lý banner</div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th class="text-center">STT</th>
                    <th class="text-center">Ảnh</th>
                    <th class="text-center">dự phòng</th>
                    
                </tr>
            </thead>
            <tbody>
                <?php
                require_once 'kenoi_csdl.php';
                $lietke_sql = "SELECT * FROM banner order by id";
                $kp = mysqli_query($conn, $lietke_sql);
                $stt = 1;
                while ($r = mysqli_fetch_assoc($kp)) {
                    $update = $r;
                ?>
                    <tr>
                        <td class="text-center"><?php echo $stt ?></td>
                        <td style="width:30%;height:25%;"><img src="<?php echo $r['link_anh']; ?>" alt="" style="width:100%;height:100%;"></td>
                        <td style="width:30%;height:25%;"><img src="<?php echo $r['du_phong']; ?>" alt="" style="width:100%;height:100%;"></td>
                     

                        <td class="text-center">
                            <a class='btn btn-info btn-sm can_icon' onclick="sendidbanner('<?php echo $r['id']; ?>')">
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
    async function sendidbanner(xid) {
        var myForm = $("#myform"); // sử dụng jQuery để chọn phần tử
        myForm.append('<input type="hidden" name="myvariable6" id="myvariable6" value="' + xid + '">'); // thêm input vào biểu mẫu
        event.preventDefault(); // ngăn chặn trang được tải lại
        $.post("sua_menu.php", myForm.serialize(), function(data) {
            // đặt nội dung của phần tử #myModal_2 bằng dữ liệu trả về từ yêu cầu AJAX
            $("#edit_banner").html(data);
            console.log(data);
            $("#edit_banner").css("display", "inline");
            //console.log($("#sua_menu_cha").html());
            // hiển thị modal
            $("#sua_banner").modal('show');
        });

    }

    
</script>