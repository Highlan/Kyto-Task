<?php

namespace App\Service\Agent;


use App\Service\IInput;

class CliAgent implements IAgent
{
    private $command;


    public function __construct(IInput $command)
    {
        $this->command = $command;
    }

    public function getInput()
    {
        return $this->command->get();
    }
}