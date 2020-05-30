<?php

namespace App\Service;


use App\View\IView;

class Drawer implements IDrawer
{
    private $view;

    public function __construct(IView $view)
    {
        $this->view = $view;
    }

    public function line($length, $first_drawable_point, $last_drawable_point, $shape = 'X', $border_shape = null)
    {
        $this->view->open();

        $pointer = 0;

        while ($pointer < $length) {
            $char = $border_shape ?? $this->view->renderWhiteSpace();

            if($this->isPointInRange($first_drawable_point, $last_drawable_point, $pointer))
            {
                $char = $shape;
            }

            yield $char;
            $pointer++;
        }
        yield $this->view->renderNewLine();

        $this->view->close();

        return;
    }

    private function isPointInRange($min, $max, $point) : bool
    {
        return ($point >= $min && $point <= $max)? true : false;
    }
}