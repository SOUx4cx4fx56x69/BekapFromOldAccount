
<?php
/*
...Warlock-Dalbaeb...
Xyuta 17.?.17
*/
require_once( "tokens.class.php" );
$token = new tokens( "./fonts/arial.ttf" , "img/".$_GET['w'].".png" );
$token->writeText($_GET['n']);
header( 'Content-Type: image/png' );
$token->getImage();
$token=NULL;
?>
