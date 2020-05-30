<?php

namespace App\Shape;


use App\Service\Drawer;

class Triangle extends SymmetricalShapeAbstract
{
    private $shape_height;


    public function __construct(Drawer $drawer, $height)
    {
        parent::__construct($drawer);

        $this->shape_height = $height;
        $this->expanded_point_in_each_step = 1;
        $this->shape_width     = (($this->shape_height - 1) * $this->expanded_point_in_each_step * 2) - 1;
        $this->line_mid_length = floor($this->shape_width / 2);

        $this->render();
    }

    public function render()
    {
        $counter = 0;

        $this->setLineCoordinate($counter);
        $this->drawLine('+');


        while ($counter < ($this->shape_height - 1)) {

            $this->setLineCoordinate($counter);
            $this->drawLine();

            $counter++;
        }
        return;
    }
}