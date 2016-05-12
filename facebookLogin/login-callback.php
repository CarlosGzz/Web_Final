<?php
	session_start();
	require_once __DIR__ . '/facebook-php-sdk-v4/src/Facebook/autoload.php';

	$fb = new Facebook\Facebook([
	  'app_id' => '1811434202420337', // Replace {app-id} with your app id
	  'app_secret' => 'd748e9975218195d19dc6404423879a1',
	  'default_graph_version' => 'v2.3',
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

	if (!isset($accessToken)) {
	  if ($helper->getError()) {
	    header('HTTP/1.0 401 Unauthorized');
	    echo "Error: " . $helper->getError() . "\n";
	    echo "Error Code: " . $helper->getErrorCode() . "\n";
	    echo "Error Reason: " . $helper->getErrorReason() . "\n";
	    echo "Error Description: " . $helper->getErrorDescription() . "\n";
	  } else {
	    header('HTTP/1.0 400 Bad Request');
	    echo 'Bad request';
	  }
	  exit;
	}

	// Logged in
	//echo '<h3>Access Token</h3>';
	//var_dump($accessToken->getValue());

	// The OAuth 2.0 client handler helps us manage access tokens
	$oAuth2Client = $fb->getOAuth2Client();

	// Get the access token metadata from /debug_token
	$tokenMetadata = $oAuth2Client->debugToken($accessToken);
	//echo '<h3>Metadata</h3>';
	//var_dump($tokenMetadata);

	// Validation (these will throw FacebookSDKException's when they fail)
	$tokenMetadata->validateAppId("1811434202420337"); // Replace {app-id} with your app id
	// If you know the user ID this access token belongs to, you can validate it here
	//$tokenMetadata->validateUserId('123');
	$tokenMetadata->validateExpiration();

	if (! $accessToken->isLongLived()) {
	  // Exchanges a short-lived access token for a long-lived one
	  try {
	    $accessToken = $oAuth2Client->getLongLivedAccessToken($accessToken);
	  } catch (Facebook\Exceptions\FacebookSDKException $e) {
	    echo "<p>Error getting long-lived access token: " . $helper->getMessage() . "</p>\n\n";
	    exit;
	  }

	  echo '<h3>Long-lived</h3>';
	  var_dump($accessToken->getValue());
	}

	$_SESSION['fb_access_token'] = (string) $accessToken;

	// User is logged in with a long-lived access token.
	// You can redirect them to a members-only page.
	//header('Location: https://example.com/members.php');

	try {
	$response = $fb->get('/me?fields=id,name,email', $_SESSION['fb_access_token']);
	} catch(Facebook\Exceptions\FacebookResponseException $e) {
	  echo 'Graph returned an error: ' . $e->getMessage();
	  exit;
	} catch(Facebook\Exceptions\FacebookSDKException $e) {
	  echo 'Facebook SDK returned an error: ' . $e->getMessage();
	  exit;
	}

	$user = $response->getGraphUser();
	echo 'UserId'. $user['id'];
	echo 'Name: ' . $user['name'];
	echo 'Email: ' . $user['email'];
	$_SESSION['idFacebook'] = $user['id'];
	$_SESSION['nombreFacebook'] = $user['name'];
	$_SESSION['correoFacebook'] = $user['email'];
	echo '<img src="https://graph.facebook.com/'.$user['id'].'/picture?type=large">';
	require "../Modelo/connect.php";
	$id = $user['id'];
	$nombre = $user['name'];
	$correo = $user['email'];
	$sql = "INSERT INTO invitados 
			(id, correo, nombre)
			VALUES 
			('$id', '$correo', '$nombre')";
	if ($db->query($sql) === TRUE){
		echo "registrado";
	}else{
		echo " ya se habia registraado";
	}		
	header('Location: ../Vista/evento.php');
?>