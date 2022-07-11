<?php
$a = array(array(1,4), array(4,7));
$b = array(array(8,9), array(2,5));

echo "Addition<br>";
for($i = 0; $i < 2; $i++)
{
    for($j = 0; $j < 2; $j++)
    {
        echo $a[$i][$j] + $b[$i][$j]. "  ";
    }
    echo"<br>";
}
echo "<br><br>Multiplication<br>";
for($i = 0; $i < 2; $i++)
{
    for($j = 0; $j < 2; $j++)
    {
        echo $a[$i][$j] * $b[$i][$j]. "  ";
    }
    echo"<br>";
}
?>