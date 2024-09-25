
<?php
//đếm các kí tự trong chuỗi 
echo strlen("Nguyen van a"); // có 12 kí tự
echo "<br/>"; // cho xuống dòng
//đếm số lượng từ có trong chuỗi 
echo str_word_count("Nguyen van a"); // có 3 vì Nguyen là 1, văn là 2, a là 3
echo "<br/>"; // cho xuống dòng
//đảo ngược chuỗi 
echo strrev("Nguyen van a");// tất cả các chữ sẽ được lộn ngược lại 
echo "<br/>"; // cho xuống dòng
//tìm chuỗi xem nó bắt đầu từ vị trí nào, lưu ý bắt đầu từ 0 đến ...
echo strpos("tran van chuong","chuong");//do chữ c bắt đầu từ 0 - c thì nằm vị trí 9 
echo "<br>";
echo strpos("tran van a","van");// do v bắt đầu từ 0 - v thì nằm vị trí số 5
echo "<br/>"; // cho xuống dòng
//thay thế văn bản có trong chuỗi
echo str_replace("trần", "nguyễn"," trần văn chương");
////str_replace ("chuỗi","chữ thay thế","chuỗi cần thay thế");

?>
