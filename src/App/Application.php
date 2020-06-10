<?php

use App\Service\Agent\AgentHandler;
use App\Shape\Triangle;
use App\Shape\Diamond;
use App\Service\Drawer;


class Application
{
    private $agent;
    private $input;
    private $view;


    public function __construct(AgentHandler $agent)
    {
        $this->agent = $agent;
        $this->input = $this->agent->handleInput();
        $this->view = $agent->handleOutput();

        $this->run();

    }

    public function run()
    {
        $drawer = new Drawer($this->view);

        $diamond  = new Diamond($drawer, $this->input);
        $triangle = new Triangle($drawer, $this->input);

        $diamond ->render();
        $triangle->render();
    }
}
