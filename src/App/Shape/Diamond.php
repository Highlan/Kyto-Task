<?php

namespace App\Shape;


class Diamond extends SymmetricalShapeAbstract
{
    private $shape_height;


    public function __construct($height)
    {

        $this->shape_height = $height;
        $this->render();
    }

    public function render()
    {
        echo 'diamond';
    }

    public function setLineCoordinate(): void
    {
        // TODO: Implement setLineCoordinate() method.
    }
}