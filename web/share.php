<?php
function print_img(){
  $sImage = 'play.jpg';
  $rFP = fopen($sImage, 'rb');
  header("Content-Type: image/jpeg");
  header("Content-Length: " .(string)(filesize($sImage)) );
  fpassthru($rFP);
}
print_img();
?>
