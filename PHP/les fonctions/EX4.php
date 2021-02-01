<?php
function myfunction($myString1,$myString2){
if($myString1>$myString2){
$result = "Le premier nombre est plus grand";
}elseif($myString1<$myString2){
$result = "Le premier nombre est plus petit";
}else {
$result ="Les deux nombres sont identiques";
}
return $result;
}

echo myfunction(3,3);

?>