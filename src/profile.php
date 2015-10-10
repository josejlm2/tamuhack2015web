<head>
<script>
FB.api(
    "/me/friends",
    function (response) {
      if (response && !response.error) {
        
      }
    }
);
</script>
</head>
<body>
<?php
use Facebook\Helpers\FacebookRedirectLoginHelper;
use Facebook\Authentication;

use Facebook\FacebookSession;

require_once __DIR__ . '/vendor/autoload.php';
$app_id     = '1497137333945789';
$app_secret = '18aec6b9e0c32ab5703e9cae736685c1';

$fb = new Facebook\Facebook([
  'app_id' => $app_id,
  'app_secret' => $app_secret,
  'default_graph_version' => 'v2.5',
  ]);

session_start();
$fb->setDefaultAccessToken($_SESSION['fb_token']);
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
//echo("hihi");
if (isset($_SESSION['fb_token'])) {
  echo("hi");
  $oAuth2Client = $fb->getOAuth2Client();

try {
	$fbApp = new Facebook\FacebookApp($app_id , $app_secret);
	$request = new Facebook\FacebookRequest($fbApp, $_SESSION['fb_token'], 'GET', '/me/friends');
    $response = $fb->getClient()->sendRequest($request);
    $graphNode = $response->getGraphNode();
} catch(Facebook\Exceptions\FacebookResponseException $e) {
  // When Graph returns an error
  echo 'Graph returned an error: ' . $e->getMessage();
  exit;
} catch(Facebook\Exceptions\FacebookSDKException $e) {
  // When validation fails or other local issues
  echo 'Facebook SDK returned an error: ' . $e->getMessage();
  exit;
}
// $friends = $fb->api('/me/friends');
//  print_r($friends); 
//echo 'Logged in as ' . $userNode->getName();
echo 'User name: ' . $graphNode['name'];

}

?>

GET /v2.2/me/friends HTTP/1.1
Host: graph.facebook.com
</body>