
<?php
//trong foreach sẽ xét đem cái biến có mảng đó gán cho biến khác(as) và in ra 
$bien = array("Tôi"," tên"," Tài");
foreach($bien as $value){//khi đó nó sẽ in từng phần trong mảng
    echo "$value <br>"; //đây là xuống dòng mỗi phần
}
?>
