<?php
if(!session_id()) {
    session_start();
}
require_once __DIR__ . '/FbLogin.php';

$fblogin = new FbLogin(array("app_id"=>"1695793150706722","app_secret"=>"33a37ad55db4af3e39e54512b554dd2b"));

$user = $fblogin->getUser("http://localhost/facebook-php-sdk/callback.php",array('email'));


echo "<pre>";
print_r($user);

//if($FbLogin->isAnyUser())
	echo "<a href=".$user.">Login with facebook</a>";	



?>