<?php
require __DIR__ .'/vendor/autoload.php';
require 'app/config/config.php';

use App\Service\Agent\AgentHandler;


$handler = new AgentHandler();
$app = new Application($handler);
