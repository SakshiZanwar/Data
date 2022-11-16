<!DOCTYPE html>
<html>
    <head>
        <title>Input Field</title>
    </head>
    <body>
        <?php
        if(isset($_POST['submit'])  && isset($_POST['pincode'])){
            $pincode = "";
            $pincode = $_POST['pincode'];
            
            $arr = array("411005"=>"SHIVAJI NAGAR","411038"=>"KOTHRUD","431513"=>"HINGOLI",
            "431208"=>"AKOLA","411042"=>"SWARGATE");
            foreach ($arr as $key => $value) {
                if($pincode == $key) {
                    echo $value."<br/>";
                }
            }
        }

        // $arr = array("411005"=>"SHIVAJI NAGAR","411038"=>"KOTHRUD",
        // "431513"=>"HINGOLI","431208"=>"AKOLA","411042"=>"SWARGATE",
        // "8749039"=>"AMERICA","0909090"=>"USA");

        // print_r(strlen($arr[8]));
        // echo "<br/>";

        // $pincodeErr = "";
        //     if(isset($_POST['submit'])  && isset($_POST['pincode'])){
        //         $pincode = "";
        //         $pincode = $_POST['pincode'];

        //         $arr = array("411005","411038","431513","431208","411039","431234",
        //         "411042","8749039","0909090");
                
        //         $i = 0;
        //         foreach ($arr as $key) {
        //             if($pincode == $key) {
        //                 //for ($i = 0; $i < count($arr); $i++) {
        //                     if(strlen($arr[$i]) == 6) {
        //                         // echo $key."<br/>";
        //                         // $i++;
        //                         if (!preg_match ("/^[1-9]*$/", $pincode)) { 
        //                         $pincodeErr = "Pincode never start with 0.";
        //                         } else {
        //                             echo "Pincode : $pincode";
        //                         }
        //                     }
        //                     else {
        //                         echo "Pincode contains only 6 digits.";
        //                     }
        //                 //}
        //             }
        //         }
        //     }
        ?>
        <form method="post" action="">
            <input type="text" name="pincode" value="" >            
            <br><br>
            <input type="submit" value="Submit" name="submit">
        </form>
    </body>
</html>