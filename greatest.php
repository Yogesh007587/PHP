<?php
function greatest_integer(int $val_1,int $val_2,int $val_3){
    if($val_1>$val_2&&$val_1>$val_2){
        echo($val_1." is greatest");
    }
    else if($val_2>$val_1&&$val_2>$val_3){
        echo($val_2." is greatest");
    }
    else{
        echo($val_3." is greatest");
    }
}
greatest_integer(2,4,9);
?>
