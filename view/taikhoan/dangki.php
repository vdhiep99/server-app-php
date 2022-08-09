<div class="content">
    <div class="boxtrai">
        <div class="row mb">
            <div class="boxtitle">ĐĂNG KÝ TÀI KHOẢN</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=dangki" method="post" enctype="multipart/form-data">
                    <b> <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?></b>
                    <div class="nhap mb11">
                        Tên đăng nhập:<br>
                        <input type="text" name="makh">
                        <div class="loi"> <?php echo (isset($loi['makh'])) ? $loi['makh'] : ''; ?></div>
                    </div>
                    <div class="nhap mb11">
                        Mật khẩu:<br>
                        <input type="password" name="pass">
                        <div class="loi"> <?php echo (isset($loi1['pass'])) ? $loi1['pass'] : ''; ?></div>
                    </div>
                    <div class="nhap mb11">
                        Nhập lại mật khẩu:<br>
                        <input type="text" name="pass1">
                        <div class="loi"> <?php echo (isset($loi2['pass1'])) ? $loi2['pass1'] : ''; ?></div>
                    </div>
                    <div class="nhap mb11">
                        Họ và tên:<br>
                        <input type="text" name="hoten">
                        <div class="loi"> <?php echo (isset($loi3['hoten'])) ? $loi3['hoten'] : ''; ?></div>
                    </div>
                    <div class="nhap mb11">
                        Email:<br>
                        <input type="email" name="email">
                        <div class="loi"> <?php echo (isset($loi5['email'])) ? $loi5['email'] : ''; ?></div>
                    </div>
                    <div class="nhap mb11">
                        Hình ảnh<br>
                        <div class="box">
                            <input type="file" name="hinh">
                        </div>
                        <div class="loi"> <?php echo (isset($loi4['hinh'])) ? $loi4['hinh'] : ''; ?></div>
                    </div>
                    <div class="nhap mb11">
                        <input type="submit" name="dangki" value="Đăng kí" class="nut">
                        <input type="reset" value="Nhập lại" class="nut">
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------------------------>
    <!-- box bên phải -->
    <!-- <div class="boxphai">
        <?php include "view/boxphai.php"; ?>
    </div> -->
</div>