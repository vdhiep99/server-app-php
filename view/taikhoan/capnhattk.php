<div class="content">
    <div class="boxtrai">
        <div class="row mb">
            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row boxcontent formtaikhoan">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                    $hinh = $img_path . $hinh;
                }

                ?>
                <b> <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?></b>
                <form action="index.php?act=edittk" method="post" enctype="multipart/form-data">
                    <div class="nhap mb11">
                        Tên đăng nhập:<br>
                        <input type="text" name="makh" value="<?= $ma_kh ?>">
                    </div>
                    <div class="nhap mb11">
                        Mật khẩu:<br>
                        <input type="password" name="pass" value="<?= $mat_khau ?>">
                    </div>
                    <div class="nhap mb11">
                        Họ và tên:<br>
                        <input type="text" name="hoten" value="<?= $ho_ten ?>">
                    </div>
                    <div class="nhap mb11">
                        Email:<br>
                        <input type="email" name="email" value="<?= $email ?>">
                    </div>
                    <div class="nhap mb11">
                        Hình ảnh<br>
                        <div class="box">
                            <input type="file" name="hinh">
                            <?php echo '<img src="' . $hinh . '" alt="" width="80px" height="80px">'?>
                        </div>
                    </div>
                    <div class="nhap mb11">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="submit" name="capnhat" value="Cập nhật" class="nut">
                        <input type="reset" value="Nhập lại" class="nut">
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------------------------>
    <!-- box bên phải -->
    <div class="boxphai">
        <?php include "view/boxphai.php"; ?>
    </div>
</div>