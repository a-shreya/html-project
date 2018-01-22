<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileDragSize"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
else

{
$myfile = fopen("fileDragSize", "r") or die("Unable to open file!");
echo fread($myfile,filesize("fileDragSize"));
fclose($myfile);
}
?>