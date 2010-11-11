<?php
require_once 'inc/config.php';
require_once 'inc/Smarty/libs/Smarty.class.php';
require_once 'inc/functions.php';

$smarty = new Smarty;
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';

  $action= @$_REQUEST['action'] ? $_REQUEST['action'] : null;
  switch ($action) {
    case 'auth': authorize(); break;
    case 'edit': edit(); break;
    default: showLoginForm(); break;
  }
  
  function authorize() {
	$password=md5($_POST['password']);
	
	if ( PASSWORD===$password ) {
                session_start();
                $_SESSION['admin']=$password;
                showEditForm();
	} else {
		showLoginForm( 'Wrong password');
	}
  }
  
  function showLoginForm($mess='') {
      global $smarty;
      if($mess) $smarty->assign('mess', $mess);
      $smarty->display('../templates/login.tpl');
  }

  function showEditForm() {
      global $smarty;
      $smarty->assign('text', get_add());
      $smarty->display('../templates/edit.tpl');
  }


  function edit(){
      needLogin();
      global $smarty;
      $text=$_POST['text'];
      $file=fopen(AD_FILE, 'w');
      fwrite($file, $text);
      fclose($file);
      $smarty->display('../templates/ok.tpl');
  }

  function needLogin(){
      session_start();
      if($_SESSION['admin']!=PASSWORD) exit;
  }
   
?>
