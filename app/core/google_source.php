<?php

//Google Code
require_once('./app/core/google/libraries/Google/autoload.php');

//Insert your cient ID and secret 
//You can get it from : https://console.developers.google.com/
$client_id = '483936634480-145gkvl0g79l7jniv446kabs2njit080.apps.googleusercontent.com';
$client_secret = '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';
$redirect_uri = 'http://gaminggear.vn/lgUser';

//incase of logout request, just unset the session var
//if (isset($_GET['logout'])) {
//    unset($_SESSION['access_token']);
//}

/* * **********************************************
  Make an API request on behalf of a user. In
  this case we need to have a valid OAuth 2.0
  token for the user, so we need to send them
  through a login flow. To do this we need some
  information from our API console project.
 * ********************************************** */
$client = new Google_Client();
$client->setClientId($client_id);
$client->setClientSecret($client_secret);
$client->setRedirectUri($redirect_uri);
$client->addScope("email");
$client->addScope("profile");

/* * **********************************************
  When we create the service here, we pass the
  client to it. The client then queries the service
  for the required scopes, and uses that when
  generating the authentication URL later.
 * ********************************************** */
$service = new Google_Service_Oauth2($client);

/* * **********************************************
  If we have a code back from the OAuth 2.0 flow,
  we need to exchange that with the authenticate()
  function. We store the resultant access token
  bundle in the session, and redirect to ourself.
 */

if (isset($_GET['code'])) {
    $client->authenticate($_GET['code']);
    $_SESSION['access_token'] = $client->getAccessToken();
    header('Location: ' . filter_var($redirect_uri, FILTER_SANITIZE_URL));
    exit;
}
/* * **********************************************
  If we have an access token, we can make
  requests, else we generate an authentication URL.
 * ********************************************** */
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
} else {
    $authUrl = $client->createAuthUrl();
}
if ($client->isAccessTokenExpired()) {
    $authUrl = $client->createAuthUrl();
    //header('Location: ' . filter_var($authUrl, FILTER_SANITIZE_URL));
}


if (!isset($authUrl)) {
    $googleUser = $service->userinfo->get(); //get user info 
    if (!empty($googleUser)) {
        $user_email = $googleUser['email'];
        $checkUserGoogle = $this->model('UserModel')->getUserEmailGoogle($user_email);
        if ($checkUserGoogle) {
            Session::data('google_login', $checkUserGoogle['user_id']);
            $response = new Response();
            $response->redirect('home');
        } else {
            $user_name = $googleUser['name'];
            $user_image = $googleUser['picture'];
            $data = [
                'user_name' => $user_name,
                'user_email' => $user_email,
                'user_image' => $user_image,
                'google_account' => 1,
                'user_create' => 1,
                'user_update' => 1
            ];
            $insertUserGoogle = $this->model('UserModel')->insertUser($data);
            if ($insertUserGoogle) {
                Session::data('google_login', $insertUserGoogle);
                $response = new Response();
                $response->redirect('home');
            }
        }
    }
}
//End Google Code
