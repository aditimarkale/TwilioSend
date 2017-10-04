<?php
    // Get the PHP helper library from twilio.com/docs/php/install
    require_once 'twilio-php-master/Twilio/autoload.php'; // Loads the library
    use Twilio\Rest\Client;
    $account_sid = 'AC6f189af575538e547c0c8bc566ecebba';
    $auth_token = '73e55146dfda04d73a2e28deba19a417';
    $client = new Client($account_sid, $auth_token);
    $messages = $client->messages->create('+12678108571', array(
         'From' => '+12017201388',
         'Body' => 'Hello'
    ));
?>