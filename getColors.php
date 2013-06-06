<?php

if (!isset($path)) $path = "img/background.jpg";
$image = imagecreatefromjpeg($path);

$width = 0;
$height = 0;
list($width, $height) = getimagesize($path);


function randPixel() {

	global $width, $height, $image;
	
	$rand_x = rand(0, $width - 1);
	$rand_y = rand(0, $height - 1);
	return imagecolorat($image, $rand_x, $rand_y);
	
}

function extractColors($color) {
	
	$colors = array();
	$colors[0] = ($color >> 16) & 0xFF;
	$colors[1] = ($color >> 8)  & 0xFF;
	$colors[2] = ($color >> 0)  & 0xFF;
	
	return $colors;
}

function printDiv($max) {
	for ($j = 0; $j < $max; $j++) {
		$colors = extractColors(randPixel());
		echo "<div class='color_div' style='background: rgb($colors[0], $colors[1], $colors[2]);'></div>";
	}
}

function printDivW($max) {
	$accu = 0;
	
	while ($accu < $max) {
		$colors = extractColors(randPixel());
		$rand = rand(5, 120);
		if ($accu + $rand > $max) {
			$rand = $max - $accu;
		}

		echo "<div class='color_div' style='width: $rand" . "px; background: rgb($colors[0], $colors[1], $colors[2]);'></div>";
		$accu += $rand;
	}
	
}

?>