<?php 

$name = array("thương", " hùng", " xưng"," bá");
for($a = 0; $a < count($name); $a++){ //dùng count để đếm phần tử và cho biến a < số phần tử đếm được 
    echo $name[$a];
    echo "<br>";// xuống dòng
}
$bien = array("Tôi"," tên"," Tài");
foreach($bien as $value){//khi đó nó sẽ in từng phần trong mảng
    echo "$value <br>"; //đây là xuống dòng mỗi phần
}

?>
