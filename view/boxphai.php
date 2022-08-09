<div class="boxtk1">
    <div class="boxtitle">TÀI KHOẢN</div>
    <div class="boxcontent formtaikhoan">
        <?php
        if (isset($_SESSION['user'])) {
            extract($_SESSION['user']);
            $hinh = $img_path . $hinh;
        ?>
            <div class="nhap">
                <p class="anhtk"><?php echo '<img src="' . $hinh . '" alt="" width="80px" height="80px">' ?></p>
                <p class="ten"><?= $ho_ten ?></p>
            </div>
            <div class="nhap">
                <li>
                    <a href="index.php?act=edittk">Cập nhật tài khoản</a>
                </li>
                <?php if ($vai_tro == 1) { ?>
                    <li>
                        <a href="admin/index.php">Quản trị Admin</a>
                    </li>
                <?php } ?>
                <li>
                    <a href="index.php?act=thoat">Đăng xuất</a>
                </li>
                <img src="" alt="">
            </div>

        <?php
        } else {
        ?>
            <form action="index.php?act=dangnhap" method="post">
                <div class="nhap">
                    Tên đăng nhập<br>
                    <input type="text" name="makh">
                </div>
                <div class="nhap">
                    Mật khẩu<br>
                    <input type="text" name="pass">
                </div>
                <div class="nhap">
                    <input type="checkbox" name="" id=""> Ghi nhớ tài khoản?
                </div>
                <div class="nhap">
                    <input type="submit" name="dangnhap" value="Đăng nhập" class="dangnhap">
                </div>
            </form>
            <li>
                <a href="index.php?act=quenmk">Quên mật khẩu</a>
            </li>
            <li>
                <a href="index.php?act=dangki">Đăng ký thành viên</a>
            </li>
        <?php } ?>
    </div>
</div>

<div class="boxtk1">
    <div class="boxtitle">DANH MỤC</div>
    <div class="boxcontent2 menudoc">
        <ul>
            <?php
            foreach ($dsloai as $loai) {
                extract($loai);
                $linkloai = "index.php?act=sp&idloai=" . $ma_loai;
                echo    '<li>
                            <a href="' . $linkloai . '">' . $ten_loai . '</a>
                        </li>';
            }
            ?>
        </ul>
    </div>
    <div class="boxfooter searbox">
        <form action="index.php?act=sp" method="post">
            <input type="text" name="kyw">
            <button type="submit" name="timkiem"><i class="gg-search"></i></button>
        </form>
    </div>
</div>

<div class="boxtk1">
    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
    <div class="boxcontent1 ">
        <?php
        foreach ($dstop10 as $hanghoa) {
            extract($hanghoa);
            $linksp = "index.php?act=spct&idsp=" . $ma_hh;
            $hinh = $img_path . $hinh;
            echo    '<div class="top10">
                        <a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a>
                        <a href="' . $linksp . '" class="link">' . $ten_hh . '</a>
                    </div>';
        }
        ?>
    </div>
</div>