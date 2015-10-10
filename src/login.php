<?php
require_once __DIR__ . '/vendor/autoload.php';
?>
<?php
$fb = new Facebook\Facebook([
  'app_id' => '1497137333945789',
  'app_secret' => '18aec6b9e0c32ab5703e9cae736685c1',
  'default_graph_version' => 'v2.5',
  ]);

session_start();
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
//$loginUrl = $helper->getLoginUrl('http://localhost:8888/src/login-callback.php', $permissions);
$loginUrl = $helper->getLoginUrl('http://goodtimes2.azurewebsites.net/src/login-callback.php', $permissions);


echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

?>