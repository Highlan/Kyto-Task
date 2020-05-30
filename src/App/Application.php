<?php

use App\Service\Agent\AgentHandler;
use App\Shape\Triangle;
use App\Shape\Diamond;


class Application
{
    private $agent;
    private $input;


    public function __construct(AgentHandler $agent)
    {
        $this->agent = $agent;
        $this->input = $this->agent->handleInput();

        $this->run();

    }

    public function run()
    {
        $diamond  = new Diamond($this->input);
//        $triangle = new Triangle($this->input);
    }
}