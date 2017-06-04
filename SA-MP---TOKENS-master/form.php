<?php
/*
...Warlock-Dalbaeb...
Xyuta 17.?.17
shitcode drevnue govno mamonta
*/
define("_DIR", "img/");
require_once( "functions.php" );
require_once( "gd_imagestyle.php" );
$font = "./fonts/arial.ttf";
$what = htmlspecialchars( $_GET['w'] );
$img = img($what);
if( !$pic = ImageCreateFrompng($img) ) die( "ERROR: no can create image. ".$img );
if(strlen($text) > 3) die( "ERROR" );
if(!is_numeric($text)) { ImageDestroy($pic);  die( "Вы ввели не правильное колл-во символов(не число)" ); }
if(!$text > 99 and !$text < 1000){
ImageDestroy($pic); 
die( " Вы ввели не правильное колл-во символов(от 100 до 999) " );
}
imagesavealpha( $pic, true );
$color = imagecolorallocate( $pic, 0x46, 0x37, 0x53 );
$width = 140;
$center = round( $width/2 );
$box = imagettfbbox( 30, 0, $font, $text );
$position = $center-round(( $box[2]-$box[0])/2 );
$position = $position + 351 ;
if( !imagefttext($pic, 31, 0, $position, 720, $color, $font , $text)) die("Error: обратитесь к системному администратору." );
header( 'Content-Type: image/png' );
$pic = imagestyle($pic,'autosize:320 320;');
Imagepng($pic); 
ImageDestroy($pic); 
