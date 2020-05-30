<?php

namespace App;


use App\Service\IInput;

class FakeData implements IInput
{

    public function get()
    {
        return HEIGHT_ARRAY_SIZE[$this->getRandomNumber(0, sizeof(HEIGHT_ARRAY_SIZE) - 1)];
    }

    public function getRandomNumber($min, $max) : int
    {
        try{
            return random_int($min, $max);
        }
        catch (\Exception $exception)
        {
            die($exception->getMessage());
        }
    }
}