<?php
$n = $_POST["so_phan_tu"];
if (is_numeric($n)){
    $mang = array($n);
    for ($i = 0; $i <$n; $i++){
        $mang[$i] = mt_rand(0,20); 
    }
    function xuat_mang ($mang){
        echo implode(" ", $mang);
    }
    function tim_max ($mang){
        $count = count($mang);
        $max = 0;
        for ($i = 0; $i < $count; $i ++){
            if ( $max < $mang[$i]){
                $max = $mang[$i];
            }
        }
        echo $max;
    }
    function tim_min ($mang){
        $count = count($mang);
        $min = $mang[0];
        for ($i = 0; $i < $count; $i++){
            
            if ($min > $mang[$i]){
                $min = $mang[$i];
            }
        }
        echo $min;
    }
    function tinh_tong ($mang){
        $count = count($mang);
        $sum = 0;
        for ($i = 0 ; $i < $count; $i++ ){
            $sum = $sum +$mang[$i];
        }
        echo $sum;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tạo mảng ngẫu nhiên, tìm min max</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form action="vidu.php" method="POST">
<table>
<thead>
<tr>
<th colspan="2">PHÁT SINH MẢNG VÀ TÍNH TOÁN</th>
</tr>
</thead>
<tbody>
<tr>
<td>Nhập số phần tử:</td>
<td><input type="text" name="so_phan_tu" 
width="100%" ></td>
</tr>
<tr>
<td></td>
<td><input type="submit" value="Phát sinh và tính 
toán"></td>
</tr>
<tr>
<td>Mảng: </td>
<td><input type="text" name="mang_so" 
disabled="disabled" value="<?php xuat_mang($mang); ?>"></td>
</tr>
<tr>
<td>GTLN ( MAX ) trong mảng: </td>
<td><input type="text" name="gtln" disabled="disabled" 
value="<?php tim_max($mang); ?>"></td>
</tr>
<tr>
<td>GTNN ( MIN ) trong mảng: </td>
<td><input type="text" name="ttnn" disabled="disabled" 
value="<?php tim_min($mang); ?>"></td>
</tr>
<tr>
<td>Tổng mảng: </td>
<td><input type="text" name="tong" disabled="disabled" 
value="<?php tinh_tong($mang); ?>"></td>
</tr>
</tbody>
</table>
</form>
</body>
</html>