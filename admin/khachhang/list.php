<div class="hop">
    <div class="row">
        <div class="row frmtitle">
            <H1>DANH SÁCH KHÁCH HÀNG</H1>
        </div>
        <div class="row frmcontent">
            <div class="row mb10">
                <a href="index.php?act=addkh"><input type="button" value="Nhập thêm"></a>
            </div>
            <div class="row mb10 frmdskhachhang">
                <table border="1">
                    <tr>
                        <th>MÃ KH</th>
                        <th>HỌ VÀ TÊN</th>
                        <th>ĐỊC CHỈ EMAIL</th>
                        <th>HÌNH ẢNH</th>
                        <th>VAI TRÒ</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php foreach ($listkhachhang as $khachhang) {
                        extract($khachhang);
                        $hinhpath = "../upload/" . $hinh;
                        if (is_file($hinhpath)) {
                            $hinh = "<img src='" . $hinhpath . "' width='100px' height='100px'>";
                        } else {
                            $hinh = "NO photo";
                        }
                        $suakh = "index.php?act=suakh&id=" . $id;
                        $xoakh = "index.php?act=xoakh&id=" . $id;
                    ?>
                        <tr>
                            <td><?= $ma_kh ?></td>
                            <td><?= $ho_ten ?></td>
                            <td><?= $email ?> </td>
                            <td><?= $hinh ?></td>
                            <td><?= $vai_tro == 1 ? 'Nhân viên' : 'Khách hàng'; ?></td>
                            <td class="sua1"> <a href="<?= $suakh ?>"><button class="sua">Sửa</button></a> </td>
                            <td class="xoa1"> <a href="<?= $xoakh ?>"><button class="xoa">Xóa</button></a> </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>

        </div>
    </div>
</div>