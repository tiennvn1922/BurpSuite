<?php
$target_dir = "avatars/";
$target_file = urldecode($target_dir . $_FILES["avatar"]["name"]);
$uploadOk = true;

$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

if($imageFileType != "jpg" && $imageFileType != "png") {
  echo "Sorry, only JPG & PNG files are allowed\n";
  $uploadOk = false;
}

//cut off anything after null byte
$target_file = strtok($target_file, chr(0));

if ($uploadOk && move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
  echo "The file ". htmlspecialchars( $target_file). " has been uploaded.";
} else {
  echo "Sorry, there was an error uploading your file.";
  http_response_code(403);
}
?><p><a href="/my-account" title="Return to previous page">« Back to My Account</a></p>