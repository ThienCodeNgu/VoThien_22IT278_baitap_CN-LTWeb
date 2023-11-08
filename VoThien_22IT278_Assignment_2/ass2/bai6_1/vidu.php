<?php
$ketqua = 0;
$mang = array();
$display_arr = $_POST['nhap_mang'];
if (isset($_POST["btn_goi"])){
    $mang = explode(",", $display_arr);
    $n = count($mang);
    for ($i = 0; $i < $n ; $i++){
        $ketqua += $mang[$i];
    }
}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập và tính toán trong dãy số</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="POST" action="vidu.php">
        <table>
            <thead>
                <tr>
                <th colspan="2">NHẬP VÀ TÍNH TRÊN DÃY SỐ</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>Nhập dãy số:</td>
                <td><input type="text" name="nhap_mang" 
                value="<?php echo $display_arr; ?>"></td>
                </tr>
                <tr>
                <td></td>
                <td><input type="submit" name="btn_goi" value="Tổng 
                dãy số" ></td>
                </tr>
                <tr>
                <td>Tổng dãy số:</td>
                <td><input type="text" name="ket_qua" 
                disabled="disabled" value="<?php echo $ketqua ?>" ></td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>