<?php

namespace App\Shape;


use App\Service\Drawer;

class Diamond extends SymmetricalShapeAbstract
{
    private $expansion_coefficient;
    private $shape_mid_height;
    private $shape_height;


    public function __construct(Drawer $drawer, $height)
    {
        parent::__construct($drawer);

        $this->shape_height = $height - 2;
        $this->expanded_point_in_each_step = 2;
        $this->shape_width      = ($this->shape_height * $this->expanded_point_in_each_step) + 1;
        $this->line_mid_length  = $this->shape_height;
        $this->shape_mid_height = ceil($this->shape_height / 2);

    }

    public function render()
    {
        $counter = 0;

        $this->setLineCoordinate($counter);
        $this->drawLine('+');


        while ($counter < $this->shape_height) {
            $border_shape = null;

            if ($counter < $this->shape_mid_height) {
                $this->expansion_coefficient = $counter;
            }
            else {
                $this->expansion_coefficient--;
            }

            $this->setLineCoordinate($this->expansion_coefficient);

            if ($counter == $this->shape_mid_height - 1)
            {
                $border_shape = '+';
            }

            $this->drawLine('X', $border_shape);

            $counter++;
        }

        $this->setLineCoordinate(0);
        $this->drawLine('+');

        return;
    }
}