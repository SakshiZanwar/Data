<?php
  function custom_mobile_validation_filter( $result, $tag ) {     
    if ( "your-mobile" == $tag->name ) {
      $name = isset( $_POST[$tag->name] ) ? $_POST[$tag->name]  : '';
      if ( $name != "" && !preg_match("/^[0-9]+$/",$name) ) {
        $result->invalidate( $tag, "Please enter valid contact no." );
      } else if(strlen($name) < 8 || strlen($name) > 15 ) {
          $result->invalidate( $tag, "Contact no should be 8 to 15 charactors only");
      } else {
          $numberlen = strlen($name);
          $zeros = substr_count($name,'0');
          if($numberlen == $zeros ) {
              $result->invalidate( $tag, "Please enter valid contact no.");
          }
      }
    }
    return $result;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Mobile No. Validation</title>
  </head>
  <body>
    <form method="post" action="">
      <input type="number" name="pincode" value="">
      <span><?php echo $pincodeErr;?></span>
      <br/><br/>
      <input type="submit" value="Submit" name="submit">
      </form>
  </body>
</html>