<?php
require_once( "gd_imagestyle.php" );
class tokens
{
private $font;
private $template;
private $pic;
private $color;
private $width;

public function __construct($font,$template)
{
if(!file_exists($font)) die("Not found font.");
if(!file_exists($template))die("Not found template.");
$this->font=$font;
$this->template=$template;
$this->InitImage();
}

public function InitImage($red=0x46,$green=0x37,$blue=0x53,$width=140)
{
$this->pic = ImageCreateFrompng($this->template)  or die( "ERROR: no can create image.".$this->template );
imagesavealpha( $this->pic, true );
$this->color = imagecolorallocate( $this->pic, $red, $green, $blue );
$this->width = 140;
}

public function writeText($text,$maxsize=3,$offset=351,$size=31,$angle=0,$y=720)
{
//
if(strlen($text) > $maxsize) return die( "ERROR: maxsize text == ".$maxsize );
if(!is_numeric($text) ||
(!$text > 99 and !$text < 1000) ) { 
return die( "Вы ввели не правильное колл-во символов или не число" ); 
}
//
$center = round( $this->width/2 );
$box = imagettfbbox( 30, 0, $this->font, $text );
$position = $center-round(( $box[2]-$box[0])/2 );
$position = $position + $offset ;
imagefttext($this->pic, $size, $angle, $position, $y, $color, $this->font , $text) or 
 die("Error: обратитесь к системному администратору." );
}

public function getImage()
{
$this->pic = imagestyle($this->pic,'autosize:320 320;');
Imagepng($this->pic); 
}

public function __destruct()
{
if(!empty($this->pic))
 ImageDestroy($this->pic);
}

}
?>
