<div class="content">
    <div class="boxtrai">
        <div class="row mb">
            <div class="boxtitle">ĐĂNG NHẬP</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=dangnhap" method="post" enctype="multipart/form-data">
                    <b> <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?></b>
                    <div class="nhap mb11">
                        Tên đăng nhập:<br>
                        <input type="text" name="makh">
                        <div class="loi"> <?php echo (isset($loi['makh'])) ? $loi['makh'] : ''; ?></div>
                    </div>
                    <div class="nhap mb11">
                        Mật khẩu<br>
                        <input type="text" name="pass">
                        <div class="loi"> <?php echo (isset($loi1['pass'])) ? $loi1['pass'] : ''; ?></div>
                    </div>
                    <div class="nhap mb11">
                        <input type="submit" name="dangnhap" value="Đăng nhập" class="nut">
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