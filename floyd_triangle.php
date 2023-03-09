<?php
echo "<table style:'border;border-collapse:collapse'>";
$count=1;
for($i=0;$i<=7;$i++){
    echo "<tr>";
    for($j=7-$i;$j>=1;$j--){
        echo "<td style='border:2px solid;border-collapse:collapse;width:30px;height:30px'>";
        echo "$count";
        $count++;

        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>