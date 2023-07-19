
<?php
   
class DT_Object
{
    public $lable;
    public $name;
    public $type;
    public $target;
    public $value;
    
    //--------------------------------------------------------
    function Tao_Input($nhan, $ten, $kieu)
    {
        echo '<div class="form-group">';
        echo '<label for="' . $ten . '">' . $nhan . ':</label>';
        echo '<input class="form-control input-sm" id="' . $ten . '" type="' . $kieu . '"';
        echo ' accept=".jpg,.jpeg,.png,.gif" placeholder="' . $nhan . '" name="' . $ten . '">';
        echo '</div>';
    }
    function Tao_Input_file($nhan, $ten, $kieu)
    {
        echo '<div class="form-group">';
        echo '<label for="' . $ten . '">' . $nhan . ':</label>';
        echo '<input class="form-control input-sm" id="' . $ten . '" type="' . $kieu . '"';
        echo ' placeholder="' . $nhan . '" name="' . $ten . '">';
        echo '</div>';
    }
    function Tao_select($nhan, $ten,$dich,$gia_tri,$conn){
        
       printf('<div class="form-group">
                        <label for="%s"> %s</label><br>
                        <select name="%s" id="%s">',$ten,$nhan,$ten,$ten);
                            //require_once 'kenoi_csdl.php';
                            $sql = 'SELECT * FROM '.$dich;
                            $kq = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($kq) > 0) {
                                while ($row = mysqli_fetch_assoc($kq)) {
                                    echo '<option value=' . $row['id'] . '>' . $row[$gia_tri] . '</option>';
                                }
                            }

                            
                        printf( '</select>

                </div>');
    }
}
class Form extends DT_Object
{
    public $head_form;
    private $conn;

    public function __construct($conn) {
        $this->conn = $conn;
    }
    //---------------------------------------------------------------- 
    function body_form($pc,$conn)
    {
        $Lable = explode($pc, $this->lable);
        $Name = explode($pc, $this->name);
        $Type = explode($pc, $this->type);
        $Target = explode($pc, $this->target);
        $Value = explode($pc, $this->value);
        for ($i = 0; $i < count($Name); $i++) {
            $dem=0;
            switch (trim($Type[$i])) {
                case 'select':
                    for($j=0;$j<count($Target);$j++){
                        $this->Tao_select($Lable[$i], $Name[$i],$Target[$j],$Value[$j],$conn);
                    }
                    break;
                case 'file':$this->Tao_Input_file($Lable[$i], $Name[$i], $Type[$i]);break;
                case 'email':
                case 'password':
                case 'number':
                case 'text':
                    $this->Tao_Input($Lable[$i], $Name[$i], $Type[$i]);
                    break;
                
            }
        }
    }
    function Tao_form($pc,$conn)
    {
        $arr_form = explode($pc, $this->head_form);
        echo '<div class="modal fade" id="' . $arr_form[1] . '" role="dialog">
              <div class="modal-dialog modal-md">  
                <form action="' . $arr_form[0] . '" name="' . $arr_form[1] . '" method="post" enctype="multipart/form-data">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <div class="modal-title">' . $arr_form[2] . '</div>
                    </div>
                    <div class="modal-body">';
        $this->body_form($pc,$conn);
        echo '</div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-default" name="' . $arr_form[3] . '">Lưu dữ liệu</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Đóng hộp thoại</button>
                    </div>
                </div>
                </form>
              </div>
            </div>';
    }
    function set_dangky($pc)
    {
        $this->head_form = 'menu_cha.php' . $pc . 'dangky' . $pc . 'Đăng ký tài khoản' . $pc . 'SAVE';
        $this->lable = 'Họ và tên' . $pc . 'Địa chỉ Email' . $pc . 'Số điện thoại' . $pc . 'Tên tài khoản' . $pc . 'Mật khẩu';
        $this->name = 'hoten' . $pc . 'email' . $pc . 'dienthoai' . $pc . 'user' . $pc . 'pass';
        $this->type = 'text' . $pc . 'email' . $pc . 'text' . $pc . 'text' . $pc . 'password';
    }
    function set_menu_cha($pc)
    {
        $this->head_form = 'menu_cha.php' . $pc . 'menu_cha' . $pc . 'thêm menu cha' . $pc . 'save_mn_cha';
        $this->lable = 'tên menu cha' . $pc . 'mã menu cha' . $pc . 'liên kết';
        $this->name = 'ten_mnc' . $pc . 'ma_mnc' . $pc . 'lk_mnc';
        $this->type = 'text' . $pc . 'text' . $pc . 'text';
    }
    function set_muc_cha($pc)
    {
        $this->head_form = 'menu_cha.php' . $pc . 'muc_cha' . $pc . 'thêm mục cha' . $pc . 'save_muc_cha';
        $this->lable = 'tên mục cha' . $pc . 'mã mục cha' . $pc . 'liên kết';
        $this->name = 'ten_muccha' . $pc . 'ma_muccha' . $pc . 'lk_muccha';
        $this->type = 'text' . $pc . 'text' . $pc . 'text';
    }
    function set_menu_con($pc){
        $this->head_form = 'menu_cha.php' . $pc . 'menu_con' . $pc . 'thêm menu con' . $pc . 'save_mn_con';
        $this->lable = 'tên menu con' . $pc . 'mã menu con' .$pc.'id menu cha'. $pc . 'liên kết';
        $this->name = 'ten_mncon' . $pc . 'ma_mncon'.$pc.'id_mncha' . $pc . 'lk_mncon';
        $this->type = 'text' . $pc . 'text'.$pc.'select' . $pc . 'text';
        $this->target = 'menu_cha';
        $this->value = 'ten_menucha';
    }
    function set_muc_con($pc){
        $this->head_form = 'menu_cha.php' . $pc . 'muc_con' . $pc . 'thêm mục con' . $pc . 'save_muc_con';
        $this->lable = 'tên mục con' . $pc . 'mã mục con' .$pc.'id mục cha'.$pc.'Link ảnh'.$pc.'địa chỉ'.$pc.'nội dung'. $pc . 'liên kết';
        $this->name = 'ten_muccon' . $pc . 'ma_muccon'.$pc.'id_muccha' .$pc.'link_anh' .$pc.'dia_chi' .$pc.'noi_dung' . $pc . 'lk_muccon';
        $this->type = 'text' . $pc . 'text'.$pc.'select' .$pc.'file' .$pc . 'text'.$pc . 'text'. $pc . 'text';
        $this->target = 'muc_cha';
        $this->value = 'ten_muccha';
    }
    function set_banner($pc){
        $this->head_form = 'menu_cha.php' . $pc . 'banner' . $pc . 'thêm banner' . $pc . 'save_banner';
        $this->lable = 'link banner' . $pc . 'link dự phòng';
        $this->name = 'file[]' . $pc . 'file[]';
        $this->type = 'file' . $pc . 'file';
    }
}
$pc = ';~*';
$form_dangky = new Form($conn);
$form_dangky->set_dangky($pc);
$form_dangky->Tao_form($pc,$conn);
$form_tao_menu_cha = new Form($conn);
$form_tao_menu_cha->set_menu_cha($pc);
$form_tao_menu_cha->Tao_form($pc,$conn);
$form_tao_muc_cha = new Form($conn);
$form_tao_muc_cha->set_muc_cha($pc);
$form_tao_muc_cha->Tao_form($pc,$conn);
$form_tao_menu_con = new Form($conn);
$form_tao_menu_con->set_menu_con($pc);
$form_tao_menu_con->Tao_form($pc,$conn);
$form_tao_muc_con = new Form($conn);
$form_tao_muc_con->set_muc_con($pc);
$form_tao_muc_con->Tao_form($pc,$conn);
$form_tao_banner = new Form($conn);
$form_tao_banner->set_banner($pc);
$form_tao_banner->Tao_form($pc,$conn);
?>