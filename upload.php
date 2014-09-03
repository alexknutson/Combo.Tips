<?php
/** IMGUR SOLUTION. WE MAY NEED THIS FOR FUTURE SCALING  
$img=$_FILES['img'];
if(isset($_POST['submit'])){ 
 if($img['name']==''){  
  echo "<h2>An Image Please.</h2>";
 }else{
  $filename = $img['tmp_name'];
  $client_id="a1754084e55a7ca";
  $handle = fopen($filename, "r");
  $data = fread($handle, filesize($filename));
  $pvars   = array('image' => base64_encode($data));
  $timeout = 30;
  $curl = curl_init();
  curl_setopt($curl, CURLOPT_URL, 'https://api.imgur.com/3/image.json');
  curl_setopt($curl, CURLOPT_TIMEOUT, $timeout);
  curl_setopt($curl, CURLOPT_HTTPHEADER, array('Authorization: Client-ID ' . $client_id));
  curl_setopt($curl, CURLOPT_POST, 1);
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl, CURLOPT_POSTFIELDS, $pvars);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  $out = curl_exec($curl);

  //var_dump($out);
  //echo $pretty($out);
  curl_close ($curl);
  //$pms = json_decode($out,true);

  header('Content-Type: application/json');
  echo $out;
  //$url=$pms['data']['link'];
  //$returnData = 'url: $url
  //return returnData;

  //return $url;
  //if($url!=""){
   //echo "<h2>Uploaded Without Any Problem</h2>";
   //echo "<img src='$url'/>";
  //}else{
   //echo "<h2>There's a Problem</h2>";
   //echo $pms['data']['error'];  
  //} 
 }
}
*/


  ## TEMP WAY - load the images on our server. We clean with CRON every 10 min
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
