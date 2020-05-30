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

        $this->render();
    }

    public function render()
    {
        echo 'triangle';
    }

    public function setLineCoordinate(): void
    {
        // TODO: Implement setLineCoordinate() method.
    }
}