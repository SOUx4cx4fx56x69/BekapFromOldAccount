<?php
function img($what){
switch($what){
case "7":
 $img = _DIR."sgt.png";
 break;
case "5":
 $img = _DIR."lt.png";
 break;
case "8":
 $img = _DIR."sheriff.png";
 break;
case "9":
 $img = _DIR."undersheriff.png";
 break;
case "6":
 $img = _DIR."deputy sheriff.png";
 break;
case "3":
 $img = _DIR."commander.png";
break;
case "4":
 $img = _DIR."cpt.png";
 break;
case "1":
 $img = _DIR."assistant sheriff.png";
 break;
case "2":
 $img = _DIR."chief.png";
 break;
default:
 die('Error: GOT LOST!. This picture not have.');
 break;
}
return $img;
}


?>
