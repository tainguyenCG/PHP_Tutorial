<?php 

$name = array("thương", " hùng", " xưng"," bá");// array chứa chỉ số 
$name[1] = "Thiên hạ";// thay thế phần từ vào mảng (hùng bằng thiên hạ)
$name[] = "tiền";//thêm phần tử vào mảng
print_r($name);// hiển thị nguyên mảng
echo "<br>";
echo count($name);// độ dài mảng
echo "<br>";
unset($name[1]);//xóa phần tử
print_r($name);

?>
