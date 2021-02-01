<?php
function myfunction($age,$gender){

if ($age>=18){
if($gender==="homme"){
$msg = "Vous êtes un homme et vous êtes majeur";
}else{
$msg = "Vous êtes une femme et vous êtes majeur" ;
}
}else{
if($gender==="homme"){
$msg ="Vous êtes un homme et vous êtes mineur";
}else{
$msg = " Vous êtes une femme et vous êtes mineur";
}
}

 return $msg ;
}

echo myfunction(23,"homme");

?>