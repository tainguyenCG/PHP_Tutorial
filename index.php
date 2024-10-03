
<form action="index.php" method="get" name="form">
    <label for="">Username</label>
    <input type="text" name="username">
    <br>
    <label for="">PassWord</label>
    <input type="password" name="password">
    <br>
    <label for="">Năm sinh</label>
    <input type="date">
    <br>
    <label for="nam">Giới Tính:</label>
    <input type="radio" id="nam" value="nam" name="gioitinh">
    <label for="nam">Nam</label>
    <input type="radio" id="nu" value="nu" name="gioitinh">
    <label for="nu">Nữ</label>
    <br>
    <label for="nam">Bạn có đồng ý không</label>
    <input type="checkbox" value="yes" name="check">
    <label for="">Yes</label>
    <br>
    <label for="">Quốc Tịch</label>
    <select name="quoctich" id="">
        <option value="vietnam">Việt Nam</option>
        <option value="chaua">Châu Á</option>
        <option value="my">Mỹ</option>
    </select>
    <br>
    <label for="">Bình Luận</label>
    <textarea name="binhluan" id="">Nội dung bình luận</textarea>
    <br>
   <button name="btn" value="gui">Gửi</button>
</form>
