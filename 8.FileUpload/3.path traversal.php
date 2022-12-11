<?php
$target_dir = "avatars/";
$target_file = urldecode($target_dir.$_FILES["avatar"]["name"]);

if (strpos($target_file, ".htaccess")) {
  echo "The upload of .htaccess files is prohibited.";
  http_response_code(403);
} else if (move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
  echo "The file ". htmlspecialchars( $target_file). " has been uploaded.";
} else {
  echo "Sorry, there was an error uploading your file.";
  http_response_code(403);
}
?><p><a href="/my-account" title="Return to previous page">« Back to My Account</a></p>