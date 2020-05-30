<?php

namespace App\View;


class WebViewRenderer implements IView
{
    public function renderNewLine() : string
    {
        return '<br>';
    }
    public function renderWhiteSpace() : string
    {
        return '&nbsp;';
    }
}