<?php
require ("xuly.php");// chạy file có trong xuly.php, LƯU Ý: nếu dùng nhiều lần thì nó gộp nhiều lần
require_once("xuly.php");// gộp 1 lần duy nhất file đó, dù nhiều lệnh như v nó vẫn gộp 1 lần vì trùng tên xuly.php
echo "<br>";
include("xuly.php"); // dùng như require
include_once("xuly.php"); // dùng như require_one
?>
