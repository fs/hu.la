<?php

function  get_bitly_xml($long_url) {
    // Add http if not exist
    $match = preg_match('/^(http|https|ftp)/', $long_url);
    if  (!$match) $long_url = 'http://'.$long_url;

    $long_url = urlencode($long_url);

    $url = BITLY_URL.$long_url;

    $xml = simplexml_load_file($url);
    return  $xml;
}

function get_add(){
  $file=fopen(AD_FILE, 'r');
  $text='';
  while (!feof($file)) {
    $text .= fgets($file);
  }
  fclose($file);
  return $text;
}

?>
