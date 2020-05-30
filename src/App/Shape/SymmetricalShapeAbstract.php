<?php

namespace App\Shape;


use App\Service\Drawer;

abstract class SymmetricalShapeAbstract implements IShape, ISymmetricalShape
{
    private $drawer;

    protected $shape_width;
    protected $line_first_drawable_point;
    protected $line_last_drawable_point;
    protected $line_mid_length;
    protected $expanded_point_in_each_step;


    public function __construct(Drawer $drawer)
    {
        $this->drawer = $drawer;
    }

    protected function drawLine($shape = 'X', $border_shape = null) : void
    {
        foreach($this->drawer->line($this->shape_width, $this->line_first_drawable_point, $this->line_last_drawable_point, $shape, $border_shape) as $key => $value)
        {
            echo $value;
        }
    }

    public function setLineCoordinate($expansion_coefficient) : void
    {
        $this->line_first_drawable_point = $this->line_mid_length - ($expansion_coefficient * $this->expanded_point_in_each_step);
        $this->line_last_drawable_point  = $this->line_mid_length + ($expansion_coefficient * $this->expanded_point_in_each_step);
    }
}