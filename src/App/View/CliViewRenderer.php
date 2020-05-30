<?php

namespace App\View;


class CliViewRenderer implements IView
{
    public function renderNewLine() : string
    {
        return PHP_EOL;
    }
    public function renderWhiteSpace() : string
    {
        return ' ';
    }
}