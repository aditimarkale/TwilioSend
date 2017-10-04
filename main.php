<?php 
 
// Get the PHP helper library from twilio.com/docs/php/install 
require_once '/path/to/vendor/autoload.php'; // Loads the library 
 
use Twilio\Rest\Client; 
 
$account_sid = 'ACc2ee9a0b7bd01ddfd3079fc23a433407'; 
$auth_token = '6a7fed7f68a9d89d75996bc165982d2b'; 
$client = new Client($account_sid, $auth_token); 
 
$messages = $client->accounts("ACc2ee9a0b7bd01ddfd3079fc23a433407") 
  ->messages->create("+12678108571", array( 
        'From' => "+12674407881",  
        'Body' => "Hello aditi",      
  ));