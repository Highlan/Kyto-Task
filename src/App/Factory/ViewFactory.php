<?php

namespace App\Factory;


use App\View\CliViewRenderer;
use App\View\IView;
use App\View\WebViewRenderer;

class ViewFactory
{
    public function build($type = '') : IView
    {
        if($type == '') {
            throw new \Exception('Invalid view Type!');
        }
        else
        {

            $func = 'create' . $type . 'ViewRenderer';

            if(method_exists($this, $func)) {
                return $this->$func();
            }
            else
            {
                throw new \Exception('View is not defined!');
            }
        }
    }

    public function createCliViewRenderer(): CliViewRenderer
    {
        return new CliViewRenderer();
    }
    public function createWebViewRenderer(): WebViewRenderer
    {
        return new WebViewRenderer();
    }
}
