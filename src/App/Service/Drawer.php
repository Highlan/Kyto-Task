<?php

namespace App\Service;


class Drawer implements IDrawer
{
    public function line($length, $first_drawable_point, $last_drawable_point, $shape = 'X', $border_shape = null)
    {
        $pointer = 0;

        while ($pointer < $length) {
            $char = $border_shape ?? ' ';

            if($this->isPointInRange($first_drawable_point, $last_drawable_point, $pointer))
            {
                $char = $shape;
            }

            yield $char;
            $pointer++;
        }
        yield PHP_EOL;

        return;
    }

    private function isPointInRange($min, $max, $point) : bool
    {
        return ($point >= $min && $point <= $max)? true : false;
    }
}