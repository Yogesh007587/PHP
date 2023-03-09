<?php
echo "<table style= 'border:2px solid white;background-color:black'align=center>";
$val=0;
for($row = 1;$row<=10;$row++){
    echo "<tr> ";
    for($col=1;$col<=10;$col++){
        echo "<td style='border:2px solid black;height:45px;width:45px;background-color:white;text-align=center'>";
        $mul=$row*$col;
        echo "$row";
        echo "*";
        echo "$col";
        echo "=";
        echo "$mul";
        echo "</td>";
        ++$val;
    }
    echo "</tr>";
}
echo "</table>";
?>
