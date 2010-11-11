<?php
require_once 'inc/config.php';
require_once 'inc/functions.php';
require_once 'inc/Smarty/libs/Smarty.class.php';
$smarty = new Smarty;
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';

$long_url =@$_GET['long_url'];

if  ($long_url)  {
    $xml=get_bitly_xml($long_url);

    $status =(int)$xml->status_code;
    $short_url = htmlspecialchars($xml->data->url);
    $hash = htmlentities($xml->data->hash);

    $smarty->assign('status', $status);
    $smarty->assign('short_url', $short_url);
    $smarty->assign('hash', $hash);
    $smarty->assign('ad', get_add());

    $smarty->display('../templates/short.tpl');
}  else  {
    $smarty->display('../templates/index.tpl');
}
?>
