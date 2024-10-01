
<?php

$bien = array(
    "Tôi", // 0
    " tên", //1
    " Tài", //2
    " Sn 2003" //3
);
//echo count($bien);// đếm coi có bao nhiêu thành phần trong mảng
//echo $ten[2]; // lưu ý này in ra vị trí thứ 2 trong array, đếm trong lập trình là từ 0 đến n
for( $i = 0; $i < count($bien); $i++){
    echo $bien[$i];
}
?>
