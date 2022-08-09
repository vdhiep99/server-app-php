<div class="hop">
    <div class="row">
        <div class="row frmtitle">
            <H1>THÊM MỚI KHÁCH HÀNG</H1>
        </div>
        <div class="row frmcontent1">
            <b> <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?></b>
            <form action="index.php?act=addkh" method="post" enctype="multipart/form-data">
                <div class="row mb11">
                    Mã khách hàng (Tên đăng nhập)<br>
                    <input type="text" name="makh">
                    <div class="loi"> <?php echo (isset($loi['makh'])) ? $loi['makh'] : ''; ?></div>
                </div>
                <div class="row mb11">
                    Mật khẩu<br>
                    <input type="password" name="pass">
                    <div class="loi"> <?php echo (isset($loi1['pass'])) ? $loi1['pass'] : ''; ?></div>
                </div>
                <div class="row mb11">
                    Nhập lại mật khẩu<br>
                    <input type="password" name="pass1">
                    <div class="loi"> <?php echo (isset($loi2['pass1'])) ? $loi2['pass1'] : ''; ?></div>
                </div>
                <div class="row mb11">
                    Họ và tên<br>
                    <input type="text" name="hoten">
                    <div class="loi"> <?php echo (isset($loi3['hoten'])) ? $loi3['hoten'] : ''; ?></div>
                </div>
                <div class="row mb11">
                    Kích hoạt<br>
                    <div class="box">
                        <label><input name="kichhoat" value="0" type="radio">Chưa kích hạot</label>
                        <label><input name="kichhoat" value="1" type="radio" checked>Kích hoạt</label>
                    </div>
                </div>
                <div class="row mb11">
                    Hình ảnh<br>
                    <div class="box">
                        <input type="file" name="hinh">
                    </div>
                    <div class="loi"> <?php echo (isset($loi4['hinh'])) ? $loi4['hinh'] : ''; ?></div>
                </div>
                <div class="row mb11">
                    Địa chỉ email<br>
                    <input type="email" name="email">
                    <div class="loi"> <?php echo (isset($loi5['email'])) ? $loi5['email'] : ''; ?></div>
                </div>
                <div class="row mb11">
                    Vai trò<br>
                    <div class="box">
                        <label><input name="vaitro" value="0" type="radio">Khách hàng</label>
                        <label><input name="vaitro" value="1" type="radio" checked>Nhân viên</label>
                    </div>
                </div>
                <div class="row mb11">
                    <input type="submit" name="them" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listkh"><input type="button" value="Danh sách"></a>
                </div>
            </form>
        </div>
    </div>
</div>