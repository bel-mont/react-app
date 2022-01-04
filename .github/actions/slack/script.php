<?php

var_dump($argv)
var_dump($_ENV)
echo 'Hi! +++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++'
// require_once 'vendor/autoload.php'
// Requests::register_autoloader();

// $message = array (
//     'blocks' => 
//     array (
//         0 => 
//         array (
//         'type' => 'section',
//         'text' => 
//         array (
//             'type' => 'mrkdwn',
//             'text' => 'You have a new request:
//     *<fakeLink.toEmployeeProfile.com|Fred Enriquez - New device request>*',
//         ),
//         ),
//         1 => 
//         array (
//             'type' => 'section',
//             'fields' => 
//             array (
//                 0 => 
//                 array (
//                 'type' => 'mrkdwn',
//                 'text' => '*Type:*
//         Computer (laptop)',
//                 ),
//                 1 => 
//                 array (
//                 'type' => 'mrkdwn',
//                 'text' => '*When:*
//         Submitted Aut 10',
//                 ),
//                 2 => 
//                 array (
//                 'type' => 'mrkdwn',
//                 'text' => '*Last Update:*
//         Mar 10, 2015 (3 years, 5 months)',
//                 ),
//                 3 => 
//                 array (
//                 'type' => 'mrkdwn',
//                 'text' => '*Reason:*
//         All vowel keys aren\'t working.',
//                 ),
//                 4 => 
//                 array (
//                 'type' => 'mrkdwn',
//                 'text' => '*Specs:*
//         "Cheetah Pro 15" - Fast, really fast"',
//                 ),
//             ),
//         ),
//         2 => 
//         array (
//         'type' => 'actions',
//         'elements' => 
//         array (
//             0 => 
//             array (
//             'type' => 'button',
//             'text' => 
//             array (
//                 'type' => 'plain_text',
//                 'emoji' => true,
//                 'text' => 'Approve',
//             ),
//             'style' => 'primary',
//             'value' => 'click_me_123',
//             ),
//             1 => 
//             array (
//             'type' => 'button',
//             'text' => 
//             array (
//                 'type' => 'plain_text',
//                 'emoji' => true,
//                 'text' => 'Deny',
//             ),
//             'style' => 'danger',
//             'value' => 'click_me_123',
//             ),
//         ),
//         ),
//     ),
// )


// $response = Requests::post(
//     "https://hooks.slack.com/services/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",
//     array(
//         "Content-type" => 'application/json'
//     ),
//     json_encode($message)
// );

// var_dump($response)

// if(!$responsne->success) {
//     echo $response->body;
// }