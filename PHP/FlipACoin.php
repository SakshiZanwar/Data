<!DOCTYPE html>
<html>
    <head>
        <title>Flip A Coin</title>
    </head>
    <body>
        <?php
        $coin1 = rand(0,1);
        $coin2 = rand(0,1);

        if ($coin1 == $coin2) {
            if($coin1 == 0) {
                echo "Heads ";
            } else {
                echo "Tails ";
            }

            if ($coin2 == 0) {
                echo "heads";
            } else {
                echo "tails";
            }
        } else {
            echo "Toss is not matched.";
        }
        ?>
    </body>
</html>