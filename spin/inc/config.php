<?php
    error_reporting(E_ALL);
    define("BITLY_LOGIN", 'YOUR_BITLY_LOGIN');
    define('BITLY_APIKEY', 'YOUR_BITLY_APIKEY');
    define('BITLY_URL', 'http://api.bit.ly/v3/shorten?login='.BITLY_LOGIN.'&apiKey='.BITLY_APIKEY.'&format=xml&longUrl=');

    define('PASSWORD', 'YOUR_PASSWORD_FOR_ADMIN');
    define('AD_FILE', './inc/ad.txt');
?>
