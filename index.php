<?php declare(strict_types=1) ; //YÊU CẦU NGHIÊM NGẶT TRONG PHP

// tính tổng cơ bản trả về return
function phepcong(int $e , int $c){ // int khai báo kiểu dữ liệu số 
    $tong = $e + $c;
    return $tong; //trả về biến tổng
} echo phepcong(11,20) . "<br>";// khi trả về xong thì echo sẽ in ra, 11 hiểu là biến e và 20 hiểu là biến c
echo phepcong(151,20);
?>
