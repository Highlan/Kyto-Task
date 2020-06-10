<?php

namespace App\Service;


interface IDrawer
{
    public function line($length, $first_drawable_point, $last_drawable_point, $shape);
}
