<?php
//print_r($_POST);
$total_imagenes = count(glob('{*.png}',GLOB_BRACE));
echo 'total_imagenes = '.$total_imagenes;

$img = $_POST['base64'];
$img = str_replace('data:image/png;base64,', '', $img);
$fileData = base64_decode($img);
$fileName = 'firma_'.$total_imagenes.'.png';

file_put_contents($fileName, $fileData);

header("Location: ./index.html");

?>