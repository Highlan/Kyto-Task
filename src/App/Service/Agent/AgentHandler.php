<?php

namespace App\Service\Agent;


use App\Service\IInput;
use App\View\IView;

class AgentHandler
{
    const AGENT_CLI = 'Cli';
    const AGENT_WEB = 'Web';

    private $agent;

    public function __construct()
    {
        if(php_sapi_name() == 'cli')
        {
            $this->agent = self::AGENT_CLI;
        }
        else
        {
            $this->agent = self::AGENT_WEB;
        }
    }

    public function handleInput() //: IInput
    {
        try{
            $agent = (new AgentFactory)->build($this->agent);
            return $agent->getInput();
        }
        catch (\Exception $exception)
        {
            die($exception->getMessage());
        }
    }

    public function handleOutput()//: IView
    {

    }

}