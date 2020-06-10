<?php

namespace App\View;


class CliViewRenderer implements IView
{
    public function open() : void
    {
    }
    public function renderNewLine() : string
    {
        return PHP_EOL;
    }
    public function renderWhiteSpace() : string
    {
        return ' ';
    }
    public function close() : void
    {
        // TODO: Implement close() method.
    }
}
