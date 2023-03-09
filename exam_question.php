<?php
declare(strict_types=1);
function gla_work(string $val_one,$val_two){
    $value=printf("%x","$val_one");
    echo"<br>";
    if($value<> $val_two and $value==1){
        $data = str_split("$val_one",1);
        asort($data);
        foreach($data as $new_data){
            echo $new_data;
        }
        echo"<br>";
    }
    else{
        $data=str_split("$val_one",1);
        ksort($data);
    }
    $data=implode(" ",$data);
    echo count_chars($data,3),"<br>";
    print ((count_chars($val_one,3)));
    echo "<br>";
    return $val_two + $value;
}
var_dump((float)gla_work("Hello Class PHP",85));
?>