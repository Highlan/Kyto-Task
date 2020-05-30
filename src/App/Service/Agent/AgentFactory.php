<?php

namespace App\Service\Agent;


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
        return new CliAgent();
    }
    public function createWebAgent(): WebAgent
    {
        return new WebAgent();
    }
}