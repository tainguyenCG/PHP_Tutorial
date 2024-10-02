<?php 

$name = array("thương", " hùng", " xưng"," bá");
for($a = 0; $a < 4; $a++){ //do vòng lặp trong for này mảng có 4 nên <4 và in ra mảng với biến a cho từng phần tử
    echo $name[$a];
    echo "<br>";// xuống dòng
}
$bien = array("Tôi"," tên"," Tài");
foreach($bien as $value){//khi đó nó sẽ in từng phần trong mảng
    echo "$value <br>"; //đây là xuống dòng mỗi phần
}

?>
