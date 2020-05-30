<?php

namespace App\Shape;


use App\Service\Drawer;

abstract class SymmetricalShapeAbstract implements IShape, ISymmetricalShape
{
    private $drawer;


    public function __construct(Drawer $drawer)
    {
        $this->drawer = $drawer;
    }
}