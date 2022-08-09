<?php

// hàm thêm mới vào tên loại hàng vào databasse
function insert_loai($tenloai)
{
    $sql = "insert into loai(ten_loai) value('$tenloai')";
    pdo_execute($sql);
}
//------------------------------------------------
// hàm xóa loại hàng trong databasse
function delete_loai($id)
{
    $sql = "delete from loai where ma_loai=" . $id;
    pdo_execute($sql);
}
//------------------------------------------------
// hàm load tất cả danh sách loại trong database
function loadAll_loai()
{
    $sql = "select * from loai";
    $listloai = pdo_query($sql);
    return $listloai;
}
//------------------------------------------------
// hàm load một loại trong danh sách loại trong database
function loadOne_loai($id)
{
    $sql = "select * from loai where ma_loai=" . $id;
    $loai = pdo_query_one($sql);
    return $loai;
}
//------------------------------------------------
// hàm update một loại trong danh sách loại trong database
function update_loai($id, $tenloai)
{
    $sql = "update loai set ten_loai='" . $tenloai . "' where ma_loai=" . $id;
    pdo_execute($sql);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>