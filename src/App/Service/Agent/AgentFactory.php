<?php

namespace App\Service\Agent;


use App\Command\GetInput;
use App\FakeData;

class AgentFactory
{
    public function build ($type = '') : IAgent
    {
        if($type == '')
        {
            throw new \Exception('Invalid Agent Type!');
        }
        else
        {

            $func = 'create' . $type . 'Agent';

            if(method_exists($this, $func))
            {
                return $this->$func();
            }
            else
            {
                throw new \Exception('Agent is not defined!');
            }
        }
    }

    public function createCliAgent(): CliAgent
    {
        return new CliAgent(new GetInput());
    }
    public function createWebAgent(): WebAgent
    {
        return new WebAgent(new FakeData());
    }
}