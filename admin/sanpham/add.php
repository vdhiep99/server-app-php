<div class="hop">
    <div class="row">
        <div class="row frmtitle">
            <H1>THÊM MỚI SẢN PHẨM</H1>
        </div>
        <div class="row frmcontent1">
            <b> <?php if (isset($thongbao) && ($thongbao != "")) echo $thongbao; ?></b>
            <form action="index.php?act=addhh" method="post" enctype="multipart/form-data">
                <div class="row mb11">
                    Mã hàng hóa<br>
                    <input type="text" name="mahh" disabled>
                </div>
                <div class="row mb11">
                    Tên hàng hóa<br>
                    <input type="text" name="tenhh">
                    <div class="loi"> <?php echo (isset($loi['tenhh'])) ? $loi['tenhh'] : ''; ?></div>
                </div>
                <div class="row mb11">
                    Đơn giá<br>
                    <input type="text" name="gia">
                    <div class="loi"> <?php echo (isset($loi1['gia'])) ? $loi1['gia'] : ''; ?></div>
                </div>
                <div class="row mb11">
                    Giảm giá<br>
                    <input type="text" name="giamgia">
                </div>
                <div class="row mb11">
                    Hình ảnh<br>
                    <div class="box">
                        <input type="file" name="hinh">
                    </div>
                    <div class="loi"> <?php echo (isset($loi2['hinh'])) ? $loi2['hinh'] : ''; ?></div>
                </div>
                <div class="row mb11">
                    Loại hàng<br>
                    <select name="maloai" class="loai">
                        <?php
                        foreach ($listloai as $loai) {
                            extract($loai);
                            echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                        }
                        ?>
                    </select>
                </div>
                <div class="row mb11">
                    Hàng đặc biệt<br>
                    <div class="box">
                        <label><input name="dacbiet" value="0" type="radio">Đặc biệt</label>
                        <label><input name="dacbiet" value="1" type="radio" checked>Bình thường</label>
                    </div>
                </div>
                <div class="row mb11">
                    Ngày nhập<br>
                    <input type="text" name="ngaynhap">
                </div>
                <div class="row mb11">
                    Số lượt xem<br>
                    <input type="text" name="so_luot_xem" readonly value="0">
                </div>
                <div class="row mb11">
                    Mô tả<br>
                    <textarea name="mota" cols="50" rows="10"></textarea>
                    <div class="loi"> <?php echo (isset($loi3['mota'])) ? $loi3['mota'] : ''; ?></div>
                </div>
                <div class="row mb11">
                    <input type="submit" name="them" value="Thêm mới">
                    <input type="reset" value="Nhập lại">
                    <a href="index.php?act=listhh"><input type="button" value="Danh sách"></a>
                </div>

            </form>
        </div>
    </div>
</div>