<?php
  // Handle screenshot uploads
  $ds          = DIRECTORY_SEPARATOR;
  $storeFolder = 'images/uploads';
  if (!empty($_FILES)) {

    $tempFile = $_FILES['file']['tmp_name'];

    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;

    $targetFile =  $targetPath. $_FILES['file']['name'];

    move_uploaded_file($tempFile,$targetFile); 

  }
?>

