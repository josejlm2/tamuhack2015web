<?php
require_once __DIR__ . '/vendor/autoload.php';
session_start();
$fb = new Facebook\Facebook([
  'app_id' => '1497137333945789',
  'app_secret' => '18aec6b9e0c32ab5703e9cae736685c1',
  'default_graph_version' => 'v2.5',
  ]);

$helper = $fb->getRedirectLoginHelper();
try {
  $accessToken = $helper->getAccessToken();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}

if (isset($accessToken)) {
  // Logged in!
  $_SESSION['facebook_access_token'] = (string) $accessToken;
  header( 'Location: http://localhost:8888/src/profile.php' ) ;
  // Now you can redirect to another page and use the
  // access token from $_SESSION['facebook_access_token']
}
?>