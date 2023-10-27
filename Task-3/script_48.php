<?php
function myfunction($p1,$p2)
{
return $p1 . "-" . $p2;
}
$a=array("Dog","Cat","Horse");
print_r(array_reduce($a,"myfunction"));
?>