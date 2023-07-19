<div class="panel panel-primary">
    <div class="panel-heading">Quản lý tài khoản người dùng</div>
    <div class="panel-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                <th class="text-center">STT</th>
                <th class="text-center">Họ và tên</th>
                <th class="text-center">Địa chỉ Email</th>
                <th class="text-center">Điện thọai</th>
                <th class="text-center">Tên tài khoản</th>
                <th class="text-center">Mật khẩu</th>
                <th class="text-center">Cập nhật</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td class="text-center">1</td>
                <td>Nguyễn Thị Thanh Giang</td>
                <td>giangcoi2018@gmail.com</td>
                <td>0983454445</td>
                <td>Doevhh</td>
                <td>434343434</td>
                <td class="text-center">
                    <button type="button" class="btn btn-info btn-sm can_icon">
                    <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                    <button type="button" class="btn btn-info btn-sm can_icon">
                    <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </td>
                </tr>
                <tr>
                <td class="text-center">2</td>
                <td>Nguyễn Thị Thanh Giang</td>
                <td>giangcoi2018@gmail.com</td>
                <td>0983454445</td>
                <td>Doevhh</td>
                <td>434343434</td>
                <td class="text-center">
                    <button type="button" class="btn btn-info btn-sm can_icon" data-toggle="modal" 
    data-target="#myModal" onclick="showHint('10')">
                    <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                    <button type="button" class="btn btn-info btn-sm can_icon">
                    <span class="glyphicon glyphicon-trash"></span>
                    </button>
                </td>
                </tr>
                <tr>
                <td class="text-center">3</td>
                <td>Nguyễn Thị Thanh Giang</td>
                <td>giangcoi2018@gmail.com</td>
                <td>0983454445</td>
                <td>Doevhh</td>
                <td>434343434</td>
                <td class="text-center">
                    <a href="#" class="btn btn-info btn-sm can_icon">
                    <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    <a href="#" class="btn btn-info btn-sm can_icon">
                    <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
                </tr>
                <tr>
                <td class="text-center">4</td>
                <td>Nguyễn Thị Thanh Giang</td>
                <td>giangcoi2018@gmail.com</td>
                <td>0983454445</td>
                <td>Doevhh</td>
                <td>434343434</td>
                <td class="text-center">
                    <a href="#" class="btn btn-info btn-sm can_icon">
                    <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    <a href="#" class="btn btn-info btn-sm can_icon">
                    <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
                </tr>
                <tr>
                <td class="text-center">5</td>
                <td>Nguyễn Thị Thanh Giang</td>
                <td>giangcoi2018@gmail.com</td>
                <td>0983454445</td>
                <td>Doevhh</td>
                <td>434343434</td>
                <td class="text-center">
                    <button href="#" class="btn btn-info btn-sm can_icon">
                    <span class="glyphicon glyphicon-pencil"></span>
                    </button>
                    <a href="#"class="btn btn-info btn-sm can_icon">
                    <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
                </tr>
                <tr>
                <td class="text-center">6</td>
                <td>Nguyễn Thị Thanh Giang</td>
                <td>giangcoi2018@gmail.com</td>
                <td>0983454445</td>
                <td>Doevhh</td>
                <td>434343434</td>
                <td class="text-center">
                    <a href="#" class="btn btn-info btn-sm can_icon">
                    <span class="glyphicon glyphicon-pencil"></span>
                    </a>
                    <a href="#" class="btn btn-info btn-sm can_icon">
                    <span class="glyphicon glyphicon-trash"></span>
                    </a>
                </td>
                </tr>
            </tbody>
            </table>
    </div>
</div>
<script>
    function showHint(str) {
    if (str.length == 0) {
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = str;
        }
        };
        xmlhttp.open("GET", "../../../index.php?id=" + str, true);
        xmlhttp.send();
    }
    }
</script>