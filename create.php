<?php 
include 'image.inc.php';
header('Content-Type: image/png'); //или /png /gif, т.е то что нам надо
create_thumbnail('test.jpg', '1.png', 200, 200);
create_thumbnail('test2.jpg', '2.png', 200, 200);