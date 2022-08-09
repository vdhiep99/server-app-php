<div class="hop">
    <div class="row">
        <div class="row frmtitle">
            <H1>DANH SÁCH LOẠI HÀNG</H1>
        </div>
        <div class="row frmcontent">
            <div class="row mb10">
                <a href="index.php?act=addloai"><input type="button" value="Nhập thêm"></a>
            </div>
            <div class="row mb10 frmdsloai">
                <table border="1">
                    <tr>
                        <th>MÃ LOẠI</th>
                        <th>TÊN LOẠI</th>
                        <th colspan="2">Action</th>
                    </tr>
                    <?php foreach ($listloai as $loai) {
                        extract($loai);
                        $sualoai = "index.php?act=sualoai&id=" . $ma_loai;
                        $xoaloai = "index.php?act=xoaloai&id=" . $ma_loai;
                        echo '<tr>
                            <td>' . $ma_loai . '</td>
                            <td>' . $ten_loai . '</td>
                            <td class="sua1"> <a href="' . $sualoai . '"><button class="sua">Sửa</button></a> </td>
                            <td class="xoa1"> <a href="' . $xoaloai . '"><button class="xoa">Xóa</button></a> </td>
                        </tr>';
                    } ?>
                </table>
            </div>

        </div>
    </div>
</div>