<div class="content">
    <div class="boxtrai">
        <div class="row mb">

            <div class="mb boxtitle"><b><?=$tenloai?></b></div>
            <div class="row">
                <?php
                foreach ($dssp as $hanghoa) {
                    extract($hanghoa); //extract là hàm trả về các biến trong mảng spnew
                    $linksp = "index.php?act=spct&idsp=" . $ma_hh;
                    $hinh = $img_path . $hinh;
                    echo    '<div class="boxsp">
                                <div class="img"><a href="' . $linksp . '"><img src="' . $hinh . '" alt=""></a></div>
                                <p class="ten"><a href="' . $linksp . '">' . $ten_hh . '</a></p>
                                <p class="gia">' . number_format($don_gia) . ' VNĐ</p> 
                            </div>';
                }
                ?>
            </div>
        </div>
    </div>
    <!------------------------------------------------------------------------------------>
    <!-- box bên phải -->
    <div class="boxphai">
        <?php include "boxphai.php"; ?>
    </div>
</div>