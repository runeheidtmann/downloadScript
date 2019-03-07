<?php

// Super neat little script, that allows you to download all weather-icons
// from Accuweather, because they are named in numeric sequence.


for ($i=1; $i < 44; $i++) {
  if($i<10){$i = "0".$i;}
   
  // The url to get img.
  $url = 'https://developer.accuweather.com/sites/default/files/'.$i.'-s.png';
  
  // Tell script what to named the image on your computer, and where to put it.
  // works also with a path:  '/my/folder/pictureName.png';
  $img = $i.'.png';
  
  file_put_contents($img, file_get_contents($url));
}
