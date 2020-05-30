<?php

namespace App\View;


class WebViewRenderer implements IView
{
    public function open() : void
    {
        echo '<pre>';
    }
    public function renderNewLine() : string
    {
        return '';
    }
    public function renderWhiteSpace() : string
    {
        return '&nbsp;';
    }
    public function close() : void
    {
        echo '</pre>';
    }
}