<?php

namespace App\Service\Agent;


use App\Service\IInput;

class WebAgent implements IAgent
{
    private $input;


    public function __construct(IInput $input)
    {
        $this->input = $input;
    }

    public function getInput()
    {
        // TODO: Implement getInput() method.
        return 1;
    }
}