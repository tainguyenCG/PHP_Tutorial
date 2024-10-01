
<?php
function ham(){
    echo "gọi hàm thành công";// cơ bản
}
ham();
echo "<br>";
//
function name($ten){
    echo "gọi hàm thành công $ten";// truyền 1 tham số
}
name("Hihi");
echo "<br>";
name("kkkk");
echo "<br>";
//
function thongtin($tenn , $namsinh){
    echo "gọi hàm thành công $tenn và $namsinh <br>";// truyền 2 tham số
}
thongtin("very","2000");
thongtin("batcer","2001");
echo "<br>";
//
function hamm($a ="thương"){
    echo " hàm thành công $a";// truyền giá trị mặc định gán giá trị vào biến
}
hamm();
echo "<br>";
// tính tổng cơ bản trả về return
function phepcong(int $e , int $c){ // int khai báo kiểu dữ liệu số 
    $tong = $e + $c;
    return $tong; //trả về biến tổng
} echo phepcong(11,20) . "<br>";// khi trả về xong thì echo sẽ in ra, 11 hiểu là biến e và 20 hiểu là biến c
echo phepcong(151,20);
?>
