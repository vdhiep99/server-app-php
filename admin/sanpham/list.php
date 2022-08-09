<div class="hop">
    <div class="row">
        <div class="row frmtitle">
            <H1>DANH SÁCH SẢN PHẨM</H1>
        </div><br>
        <form action="index.php?act=listhh" method="post">
            Tìm kiếm sản phẩm: <br>
            <input type="text" name="xyz" class="nhap">
            <select name="maloai" class="chon">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listloai as $loai) {
                    extract($loai);
                    echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="listok" value="GO" class="OK">
        </form>
        <div class="row frmcontent">
            <div class="row mb10">
                <a href="index.php?act=addhh"><input type="button" value="Nhập thêm"></a>
            </div>
            <div class="row mb10 frmdshanghoa">
                <table border="1">
                    <tr>
                        <th>MÃ HH</th>
                        <th>TÊN HH</th>
                        <th>ĐƠN GIÁ</th>
                        <th>GIẢM GIÁ</th>
                        <th>LƯỢT XEM</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php foreach ($listhanghoa as $hanghoa) {
                        extract($hanghoa);
                        $suahanghoa = "index.php?act=suahanghoa&id=" . $ma_hh;
                        $xoahanghoa = "index.php?act=xoahanghoa&id=" . $ma_hh;
                    ?>
                        <tr>
                            <td><?= $ma_hh ?></td>
                            <td><?= $ten_hh ?></td>
                            <td><?= number_format($don_gia) ?> VNĐ</td>
                            <td><?= number_format($giam_gia) ?>%</td>
                            <td><?= $so_luot_xem ?></td>
                            <td class="sua1"> <a href="<?= $suahanghoa ?>"><button class="sua">Sửa</button></a> </td>
                            <td class="xoa1"> <a href="<?= $xoahanghoa ?>"><button class="xoa">Xóa</button></a> </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>