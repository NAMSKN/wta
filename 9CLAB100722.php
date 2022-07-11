<?php
$all = "Mississippi Alabama Australia Austin Texas Massachusetts Kansas Tuxas";
$arr = [];
$s1 = explode(' ',$all); //Break a string into an array:
$i = 0;
print "\n XAS   : ";
foreach($s1 as $s)
{
    if(preg_match('/xas$/', ($s))) //The preg_match() function returns whether a match was found in a string.
    {
        $all[$i] = ($s);
        $i = $i + 1;
        echo "<br>".$s;
    }
}
echo"<br><br>";
print " k .... s  : ";
foreach($s1 as $s)
{
    if(preg_match('/^K.*s$/', ($s))) //The preg_match() function returns whether a match was found in a string.
    {
        $all[$i] = ($s);
        $i = $i + 1;
        echo "<br>".$s;
    }
}
echo"<br><br>";
print " .....a : ";
foreach($s1 as $s)
{
    if(preg_match('/a$/', ($s))) //The preg_match() function returns whether a match was found in a string.
    {
        $all[$i] = ($s);
        $i = $i + 1;
        echo "<br>".$s;
    }
}
echo"<br><br>";
print " a......... ";
foreach($s1 as $s)
{
    if(preg_match('/^A/', ($s))) //The preg_match() function returns whether a match was found in a string.
    {
        $all[$i] = ($s);
        $i = $i + 1;
        echo "<br>".$s;
    }
}
?>