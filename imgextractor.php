<?php
function getAvgColor($image) {
    $img = imagecreatefromstring(file_get_contents($image));
    $width = imagesx($img);
    $height = imagesy($img);
    $pixel = imagecreatetruecolor(1, 1);
    imagecopyresampled($pixel, $img, 0, 0, 0, 0, 1, 1, $width, $height);
    $rgb = imagecolorat($pixel, 0, 0);
    $color = imagecolorsforindex($pixel, $rgb);
    return sprintf('#%02x%02x%02x', $color['red'], $color['green'], $color['blue']);
}
?>
