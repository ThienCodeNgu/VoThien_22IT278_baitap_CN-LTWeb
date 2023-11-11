<?php
$connect = mysqli_connect("localhost", "root", "", "tintuc");
// nếu có lỗi xảy ra thì dừng chương trình lại và in ra thông báo lỗi
if (mysqli_connect_errno()!==0){
    die("Không thế kết nối database ".mysqli_connect_errno());
}else {
    
}
mysqli_set_charset($connect,'utf8');

?>