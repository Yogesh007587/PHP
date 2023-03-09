<?php
echo "<table style = 'border:2px solid black;background-color:white' align=center>";
$val=0;
for($row=0;$row<10;$row++){
    echo "<tr>";
    for($col=0;$col<10;$col++){
        echo "<td style= 'border:2px solid black;height:45px;width:45px;background-color:white' text-align=center>$row$col</td>";
        ++$val;
    }
    echo "</tr>";
}
echo "</table>";
?>
