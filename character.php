<?php
$char = 'm';
$nextchar = ++$char; 
 
if (strlen($nextchar) > 1) 
{
 $nextchar = $nextchar[0];
 }
echo $nextchar."\n";
?>
