<div class="content">
    <div class="boxtrai">
        <div class="row mb">
            <div class="boxtitle">QUÊN MẬT KHẨU</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=quenmk" method="post" enctype="multipart/form-data">
                    <div class="nhap mb11">
                        Tên đăng nhập:<br>
                        <input type="text" name="makh">
                        <div class="loi"> <?php echo (isset($loi['makh'])) ? $loi['makh'] : ''; ?></div>
                    </div>
                    <div class="nhap mb11">
                        Email:<br>
                        <input type="email" name="email">
                        <div class="loi"> <?php echo (isset($loi1['email'])) ? $loi1['email'] : ''; ?></div>
                    </div>
                    <div class="nhap mb11">
                        <input type="submit" name="quenmk" value="Tìm lại mật khẩu" class="nut">
                        <input type="reset" value="Nhập lại" class="nut">
                    </div>
                    <b> <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?></b>
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