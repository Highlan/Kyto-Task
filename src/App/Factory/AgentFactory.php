<?php

namespace App\Factory;


use App\Command\GetInput;
use App\Service\Agent\CliAgent;
use App\Service\Agent\IAgent;
use App\Service\Agent\WebAgent;
use App\Service\FakeData;

class AgentFactory
{
    public function build($type = '') : IAgent
    {
        if($type == '') {
            throw new \Exception('Invalid Agent Type!');
        }
        else
        {

            $func = 'create' . $type . 'Agent';

            if(method_exists($this, $func)) {
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
