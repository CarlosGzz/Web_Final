<?php
	// Pass session data over.
 	if(!session_id()) {
    	session_start();
	}
 
	// Include the required dependencies.
	require_once __DIR__ . '/facebook-php-sdk-v4/src/Facebook/autoload.php';

	// Initialize the Facebook PHP SDK v5.
	$fb = new Facebook\Facebook([
	  'app_id'                => '1811434202420337',
	  'app_secret'            => 'd748e9975218195d19dc6404423879a1',
	  'default_graph_version' => 'v2.3',
	]);

	var_dump($fb);



	# Facebook PHP SDK v5: Check Login Status Example
 
	// Choose your app context helper
	$helper = $fb->getCanvasHelper();
	 
	// Grab the signed request entity
	$sr = $helper->getSignedRequest();
	 
	// Get the user ID if signed request exists
	$user = $sr ? $sr->getUserId() : null;
	if ( $user ) {
	  try {
	 
	    // Get the access token
	    $accessToken = $helper->getAccessToken();
	  } catch( Facebook\Exceptions\FacebookSDKException $e ) {
	 
	    // There was an error communicating with Graph
	    echo $e->getMessage();
	    exit;
	  }
	}
	echo "mataame";

	#Facebook login with facebook button wit url 

	$helper = $fb->getRedirectLoginHelper();
	$permissions = ['email']; // optional
	$callback = 'http://localhost/~CarlosGzz/Web_Final/facebookLogin/login-callback.php';
	$loginUrl = $helper->getLoginUrl($callback, $permissions);

	var_dump($loginUrl);
	var_dump($helper);

	echo '<a href="' . $loginUrl . '">Log in with Facebook!</a>';

	echo "hola";
	


?>