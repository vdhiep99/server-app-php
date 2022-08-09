<?php
if (is_array($khachhang)) { //hàm kiểm tra biến có phải là một mảng không,
    extract($khachhang);
    //extract là hàm trả về các biến trong mảng 
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='100px' >";
} else {
    $hinh = "NO photo";
}
?>
<div class="hop">
    <div class="row">
        <div class="row frmtitle">
            <H1>CẬP NHẬT THÔNG TIN KHÁCH HÀNG</H1>
        </div>
        <div class="row frmcontent1">
            <b> <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?></b>
            <form action="index.php?act=updatekh" method="post" enctype="multipart/form-data">
                <div class="row mb11">
                    Mã khách hàng<br>
                    <input type="text" name="makh" value="<?= $ma_kh ?>" disabled>
                </div>
                <div class="row mb11">
                    Mật khẩu<br>
                    <input type="password" name="pass" value="<?= $mat_khau ?>">
                </div>
                <div class="row mb11">
                    Nhập lại mật khẩu<br>
                    <input type="password" name="pass1" value="<?= $mat_khau ?>">
                </div>
                <div class="row mb11">
                    Họ và tên<br>
                    <input type="text" name="hoten" value="<?= $ho_ten ?>">
                </div>
                <div class="row mb11">
                    Kích hoạt<br>
                    <div class="box">
                        <label><input name="kichhoat" value="0" type="radio" <?= $kich_hoat ? '' : 'checked' ?>>Chưa kích hạot</label>
                        <label><input name="kichhoat" value="1" type="radio" <?= $kich_hoat ? 'checked' : '' ?>>Kích hoạt</label>
                    </div>
                </div>
                <div class="row mb11">
                    Hình ảnh<br>
                    <div class="box">
                        <input type="file" name="hinh">
                        <p> <?= $hinh ?></p>
                    </div>
                </div>
                <div class="row mb11">
                    Địa chỉ email<br>
                    <input type="email" name="email" value="<?= $email ?>">
                </div>
                <div class="row mb11">
                    Vai trò<br>
                    <div class="box">
                        <label><input name="vaitro" value="0" type="radio" <?= $vai_tro ? '' : 'checked' ?>>Khách hàng</label>
                        <label><input name="vaitro" value="1" type="radio" <?= $vai_tro ? 'checked' : '' ?>>Nhân viên</label>
                    </div>
                </div>
                <div class="row mb11">
                    <input type="hidden" name="id" value="<?= $id ?>">
                    <input type="submit" name="capnhat" value="Cập nhật">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listkh"><input type="button" value="Danh sách"></a>
                </div>
            </form>
        </div>
    </div>
</div>