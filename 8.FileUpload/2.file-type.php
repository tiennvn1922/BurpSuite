<?php
$target_dir = "avatars/";
$target_file = $target_dir . $_FILES["avatar"]["name"];
$uploadOk = true;

$allowedTypes = ["image/jpeg", "image/png"];
// Check file type
if (!in_array($_FILES["avatar"]["type"], $allowedTypes)) {
  echo "Sorry, file type " . $_FILES["avatar"]["type"] . " is not allowed
        Only " . implode(' and ', $allowedTypes) . " are allowed\n";
  $uploadOk = false;
}

if ($uploadOk && move_uploaded_file($_FILES["avatar"]["tmp_name"], $target_file)) {
  echo "The file ". htmlspecialchars( $target_file). " has been uploaded.";
} else {
  echo "Sorry, there was an error uploading your file.";
    http_response_code(403);
}
?><p><a href="/my-account" title="Return to previous page">« Back to My Account</a></p>