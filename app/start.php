<?php

use Aws\Sns\SnsClient;

require 'vendor/autoload.php';

$sns = SnsClient::factory([
  'key' => '',
'secret' => '',
'region' => 'ap-northeast-1'
]);

 ?>
