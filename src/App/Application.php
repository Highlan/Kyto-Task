<?php

use App\Service\Agent\AgentHandler;
class Application
{
    private $agent;


    public function __construct(AgentHandler $agent)
    {
        $this->agent = $agent;
        $this->input = $this->agent->handleInput();

    }

    public function run()
    {
        echo 'app runs!';
    }
}