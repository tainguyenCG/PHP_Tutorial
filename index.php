
<?php
// $a = 0;
// if ($a < 1){ 
//     echo "biến số " . $a . " lớn hơn 1";
// } else {
//     echo "biến số " . $a . " bé hơn 1";
// }
//
// $b = 100;
// $c = 2000;
// if ($b > $c){
//     echo "biến " . $b . " < " . $c ;
// }else{
//     echo "biến " . $c . " > " . $b ;
// }
//
// $b = 100;
// $c = 2000;
// if ($b > $c){
//     echo "biến " . $b . " > " . $c ;
// }elseif($b == $c){
//     echo "biến " . $b . " = " . $c ;
// }else{
//     echo "Tất cả đều sai";
// }
// $a = 000;
// $b = 400;
// $c = $a + $b ;
// if($c > 500){
//     echo $c . " lớn hơn 500";
// } elseif ($c == 500){
//     echo $c . " bằng 500";
// }else{
//     echo " không thỏa điều kiện ";
// }

// toán tử 3 ngôi 
$a = 900;
$b = 400;
$c = $a + $b;

echo ($c > 500) ? $c . " lớn hơn 500" : (($c == 500) ? $c . " bằng 500" : " không thỏa điều kiện ");
// hiểu là sẽ in ra nếu $c > 500 đúng thì in ra $c lớn hơn 500. 
//nếu điều kiện sai thì xét tiếp $c == 500 đúng thì $c = 500, 
//nếu điều kiện sai nữa thì in ra câu không thỏa điều kiện

?>
