<?php

$n1= $_POST["Año"];
$res = $n1%4;
$r1= $n1 %100;
$r2= $n1 % 400;

if ($res==0) {
echo "El año es bisiestro";
 }
 else if ($r1 <> 0 & $r2 == 0)
{
  echo "El año es bisiestro";
}
else 
{
  echo "El año no es bisiestro";
}

?>


