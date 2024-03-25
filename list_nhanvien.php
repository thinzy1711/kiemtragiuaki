<?php
require_once('entities/nhanvien.class.php');
?>

<?php
include_once('header.php');
$nhanviens = NHANVIEN::list_nhanvien();

echo "<table>";
echo "<tr><th>Mã nhân viên</th><th>Tên nhân viên</th><th>Phái</th><th>Nơi sinh</th><th>Mã phòng</th><th>Lương</th></tr>";

foreach ($nhanviens as $item) {
    echo "<tr>";
    echo "<td>".$item["Ma_NV"]."</td>";
    echo "<td>".$item["Ten_NV"]."</td>";
    echo "<td>".$item["Phai"]."</td>";
    echo "<td>".$item["Noi_Sinh"]."</td>";
    echo "<td>".$item["Ma_Phong"]."</td>";
    echo "<td>".$item["Luong"]."</td>";
    echo "</tr>";
}

echo "</table>";


include_once('footer.php');

?>