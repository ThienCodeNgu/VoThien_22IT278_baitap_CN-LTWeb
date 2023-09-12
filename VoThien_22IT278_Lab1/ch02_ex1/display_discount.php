<!DOCTYPE html>
<html>
<head>
    <title>Product Discount Calculator</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <?php 
   //kiểm tra sự tồn tại của trường mô tả sản phẩm
    if (isset($_POST["product_description"])){ 
        //nếu trường mô tả sản phẩm tồn tại
        $product_desceription = $_POST["product_description"];
    }
    if (isset($_POST["list_price"])){
        $list_price = $_POST["list_price"];
    }
    if (isset($_POST["discount_percent"])){
        $discount_percent = $_POST["discount_percent"];
    }

    // lọc và kiểm tra giá trị của trường thuộc tính
    $list_price = filter_input(INPUT_POST, 'list_price', FILTER_VALIDATE_INT);
    $discount_percent = filter_input(INPUT_POST, 'discount_percent', FILTER_VALIDATE_INT);


    ?>
    <main>
        <h1>Product Discount Calculator</h1>

        <label>Product Description:</label>
        <span><?php echo $product_desceription; ?></span><br>

        <label>List Price:</label>
        <span><?php 
        if ($list_price !== null && $list_price !== false) {
            // Giá trị sau khi đã được lọc là một số nguyên hợp lệ
            echo $list_price;
        } else {
            echo "Invalid value";
        } 
        ?></span><br>

        <label>Standard Discount:</label>
        <span>
        <?php 
            if ($discount_percent !== null && $discount_percent !== false &&  $discount_percent > 0 && $discount_percent <= 100)  {
                echo $discount_percent;
            }else {
                echo "Invalid value";
            }
        ?>
        </span><br>
        <label>Discount Amount:</label>
        <span>
        <?php 
        //tính số tiền triết khấu
        $numberA = $list_price / 10;
        $numberB = floor($discount_percent / 10);
        $discount_amount = ($numberA * $numberB) + ($numberA / 2);
        echo $discount_amount;
        ?>
        </span><br>

        <label>Discount Price:</label>
        <span><?php 
        $discount_price = ($list_price - $discount_amount);
        echo $discount_price;
        ?></span><br>
    </main>
</body>
</html>