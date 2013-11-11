<?php


session_start();

$client = new Google_Client();
$client->setApplicationName('Google Contacts PHP Sample');
$client->setScopes("http://www.google.com/m8/feeds/");
// Documentation: http://code.google.com/apis/gdata/docs/2.0/basics.html
// Visit https://code.google.com/apis/console?api=contacts to generate your
// oauth2_client_id, oauth2_client_secret, and register your oauth2_redirect_uri.
 $client->setClientId('326511197769.apps.googleusercontent.com');
 $client->setClientSecret('7oEAJQyp3m8Zq40nUHXUKHuY');
 $client->setRedirectUri('http://localhost/we/index.php/signup/signup/process5');
$client->setDeveloperKey('AIzaSyCs5vIoJ759f0GNhm-MbFSlA3t0Uh2TOlY');

if (isset($_GET['code'])) {
  $client->authenticate();
  $_SESSION['token'] = $client->getAccessToken();
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
}

if (isset($_SESSION['token'])) {
 $client->setAccessToken($_SESSION['token']);
}

if (isset($_REQUEST['logout'])) {
  unset($_SESSION['token']);
  $client->revokeToken();
}

if ($client->getAccessToken()) {
  $req = new Google_HttpRequest("https://www.google.com/m8/feeds/contacts/default/full");
  $val = $client->getIo()->authenticatedRequest($req);

  // The contacts api only returns XML responses.
  $response = json_encode(simplexml_load_string($val->getResponseBody()));
  $rr=json_decode($response, true), true) ;

  // The access token may have been updated lazily.
  $_SESSION['token'] = $client->getAccessToken();
} else {
  $auth = $client->createAuthUrl();
}

  unset($_SESSION['token']);