<?php

require 'app/start.php';

// $result = $sns->createTopic(array(
//     // Name is required
//     'Name' => 'Ankit',
// ));

// $result = $sns->createPlatformApplication(array(
//     // Name is required
//     'Name' => 'Test_application',
//     // Platform is required
//     'Platform' => 'GCM',
//     // Attributes is required
//     'Attributes' => array(
//         // Associative array of custom 'String' key names
//         'PlatformCredential' => 'AIzaSyAXRnhSI5QyQozNDNrRE_h26wlUtyxAOeM'
//         // ... repeated
//     ),
// ));

// $result = $sns->getPlatformApplicationAttributes(array(
//     'PlatformApplicationArn' => 'arn:aws:sns:ap-northeast-1:133158889237:app/GCM/Test_application'
// ));

$result = $sns->listTopics();

var_dump($result);

 ?>
