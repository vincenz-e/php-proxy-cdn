<?php
$file_path = $_GET['src'];
$content_type = $_GET['ct'] or '';


if (substr($file_path, -4) === '.css') {
    header('Content-type: text/css');
}
if (substr($file_path, -3) === '.js') {
    header('Content-type: text/javascript');
}

if ($content_type) {
    header('Content-type: '.$content_type);
}

echo file_get_contents($file_path); // Load the content of file and print it to browser

?>
