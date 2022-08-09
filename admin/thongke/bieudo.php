<div class="hop">
    <div class="row">
    <div class="row frmtitle">
            <H1>BIỂU ĐỒ THỐNG KÊ</H1>
        </div>
        <div id="piechart"></div>

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

        <script type="text/javascript">
            // Load google charts
            google.charts.load('current', {
                'packages': ['corechart']
            });
            google.charts.setOnLoadCallback(drawChart);

            // các giá trị của biểu đồ
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                    ['Loại hàng', 'Số lượng sản phẩm'],
                    <?php
                    $tongloai=count($listthongke);
                    $i=1;
                        foreach ($listthongke as $thongke) {
                            extract($thongke);
                            if($i==$tongloai) $dauphay=""; else $dauphay=",";
                            echo "['".$thongke['ten_loai']."',".$thongke['so_luong']."]".$dauphay;
                            $i+=1;
                        }
                    ?>
                ]);

                // tiêu đề và chiều cao và độ rộng của biểu đồ
                var options = {
                    'title': 'Thông kê sản phẩm theo loại hàng',
                    'width': 850,
                    'height': 700
                };

                // Display the chart inside the <div> element with id="piechart"
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
            }
        </script>

    </div>
</div>