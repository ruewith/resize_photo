<?php 
include_once 'image.inc.php';
header('Content-Type: image/jpeg'); //или /png /gif, т.е то что нам надо
$user = 255;
$path = "src/test.jpg";

$sizes = array();

$sizes["small"] = array("W"=>140, "H"=>105);
$sizes["clip"] = array("W"=>40, "H"=>40);
$sizes["clip2"] = array("W"=>80, "H"=>80);

foreach ($sizes as $size => $out) {
    resize_photo($path, "images/".$size."/".$user.".jpg", $out);
}

