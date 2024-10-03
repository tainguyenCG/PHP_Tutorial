<?php 

$a = 110;
$b = 200;
function phepcong(){
    $GLOBALS['c']  = $GLOBALS['a'] + $GLOBALS['b'];
}
phepcong();
echo $c;
//biến toàn cầu để truy cập mọi phạm vi $GLOBALS['c'] 

?>
