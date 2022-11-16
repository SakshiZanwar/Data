<?php
function uppercase($str) {
    $char = str_split($str);
    $result = '';

    for ($i = 0; $i < count($char); $i++) {
        $ch = ord($char[$i]);
        if ($char[$i] >= 'a' && $char[$i] <= 'z') {
            $result .= chr($ch - 32);
        }
        else {
            $result .= $char[$i];
        }
    }
    return $result;
}
$name = "sakshi";
echo uppercase($name);
?>