<!DOCTYPE html>
<html>
    <head>
        <title>Indian Pincode</title>
    </head>
    <body>
        <?php
            $pincodeErr = "";
            if(isset($_POST['submit'])  && isset($_POST['pincode'])){
                $pincode = "";
                $pincode = $_POST['pincode'];

                if(empty($pincode)) {
                    echo "It should not be blank.";
                }
                else {
                    $reg = '/^[1-9]{1}[0-9]{5}$/';
                    if(preg_match($reg,$pincode)){
                        $arr = array("411005","411038","431513","431208","411039","431234",
                "411042","8749539","0909090");
                $counter = 0;
                for($i=0; $i < count($arr); $i++) {
                    if($arr[$i] == $pincode) {
                        //echo "Match";
                        echo $counter++;
                        
                    } 
                }
                        //echo "Pincode :- $pincode<br/>";
                    } else {
                        echo "Enter a valid pincode.";
                    }
                }
                
                if($counter == 0) {
                    echo "Match";
                } else {
                    echo "Not Match";
                }
                

            }
        ?>
        <form method="post" action="">
            <input type="text" name="pincode" value="">
            <span><?php echo $pincodeErr;?></span>
            <br/><br/>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>