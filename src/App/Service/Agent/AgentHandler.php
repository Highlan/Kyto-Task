<?php

namespace App\Service\Agent;


use App\Service\IInput;
use App\View\IView;
use App\View\ViewFactory;

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

    public function handleInput()
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
        try{
            return (new ViewFactory())->build($this->agent);
        }
        catch (\Exception $exception)
        {
            die($exception->getMessage());
        }
    }

}