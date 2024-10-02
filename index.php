<?php 

$name = array("thương", " hùng", " xưng"," bá");// array chứa chỉ số 
echo $name[1] , $name[2], $name[3]."<br>";//0 , 1 , 2 ,3
//
$thongtin =array("thương"=>"1999", "hùng"=>"2000");// array dạng Json
echo $thongtin['thương']."<br>";
echo $thongtin['hùng']."<br>";
//
$mess = array(
    array("thuong", "1999", "vietnam"),//vị trí 0
    array("duong", "2000", "vietnam"),//vị trí 1
    array("hung", "1993", "vietnam"),//vị trí 2
);      // 0     , 1    ,   2  
echo $mess[0][0]."<br>";// [0] là vị trí đầu của mảng đa chiều [0]vị trí gọi tới của mảng đó
echo $mess[0][1]."<br>";
echo $mess[0][2]."<br>";
//
echo $mess[1][0]."<br>";
echo $mess[1][1]."<br>";
echo $mess[1][2]."<br>";
//
echo $mess[2][0]."<br>";
echo $mess[2][1]."<br>";
echo $mess[2][2]."<br>";
?>
