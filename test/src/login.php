<?php
require_once __DIR__ . '/vendor/autoload.php';
?>
<?php
$fb = new Facebook\Facebook([
  'app_id' => '1497137333945789',
  'app_secret' => 'e8545c06ecf6b8aba1cab12d11ace13c',
  'default_graph_version' => 'v2.5',
  ]);

session_start();
$helper = $fb->getRedirectLoginHelper();
$permissions = ['email', 'user_likes']; // optional
$loginUrl = $helper->getLoginUrl('http://goodtimes2.azurewebsites.net/src/login-callback.php.php', $permissions);

echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

?>