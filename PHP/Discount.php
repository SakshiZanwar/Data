<!DOCTYPE html>
<html>
    <head>
        <title>Discount Value</title>
    </head>
    <body>
        <?php
        $original_price = 100;
        $discount_value = 80;
        $discount = $original_price - $discount_value;
        $discount = ($discount / $original_price) * 100;
        echo "Discount is $discount%";
        ?>
    </body>
</html>